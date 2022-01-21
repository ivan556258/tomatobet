const editor = new EditorJS({
    holder: 'editorjs',
    /** 
     * Available Tools list. 
     * Pass Tool's class or Settings object for each Tool you want to use 
     */
    tools: {
        header: Header,
        delimiter: Delimiter,
        paragraph: {
            class: Paragraph,
            inlineToolbar: true,
        },
        embed: Embed,
        image: SimpleImage,
    }
});

var form = document.forms.namedItem("fileinfo");
form.addEventListener('submit', function(ev) {
    ev.preventDefault();
    editor.save().then((output) => {
        function convertDataToHtml(blocks) {
            var convertedHtml = "";
            blocks.map(block => {

                switch (block.type) {
                    case "header":
                        convertedHtml += `<h${block.data.level}>${block.data.text}</h${block.data.level}>`;
                        break;
                    case "embded":
                        convertedHtml += `<div><iframe width="560" height="315" src="${block.data.embed}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>`;
                        break;
                    case "paragraph":
                        convertedHtml += `<p>${block.data.text}</p>`;
                        break;
                    case "delimiter":
                        convertedHtml += "<hr />";
                        break;
                    case "image":
                        convertedHtml += `<img class="img-fluid" src="${block.data.file.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em>`;
                        break;
                    case "list":
                        convertedHtml += "<ul>";
                        block.data.items.forEach(function(li) {
                            convertedHtml += `<li>${li}</li>`;
                        });
                        convertedHtml += "</ul>";
                        break;
                    default:
                        console.log("Unknown block type", block.type);
                        break;
                }
            });
            return convertedHtml;
        }
        oData = new FormData(form);
        oData.append('_token', "{{csrf_token()}}");
        oData.append('eDataHtml', convertDataToHtml(output.blocks));

        // oData.append('eData2', output.blocks);

        oData.append('eDataOrigin', JSON.stringify(output.blocks));

        var oReq = new XMLHttpRequest();
        oReq.open("POST", "/auth/save/post", true);
        oReq.onload = function(oEvent) {
            if (oReq.status == 200) {
                // oOutput.innerHTML = "Uploaded!";
            } else {
                // oOutput.innerHTML = "Error " + oReq.status + " occurred when trying to upload your file.<br \/>";
            }
        };
        oReq.send(oData);
    }).catch((error) => {
        return error;
    });

    ev.preventDefault();
}, false);