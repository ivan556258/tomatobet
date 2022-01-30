      <form enctype="multipart/form-data" method="post" name="fileinfo" class="p-5">
          <div class="col-md-10 mb-3">

            <label for="validationCustom01" class="form-label">Title поста</label>
            @if (isset($post))
            <input type="text" class="form-control" name="titleText" id="validationCustom01" value="{{$post->titleText ?? ''}}" required>   
            @else 
            <input type="text" class="form-control" name="titleText" id="validationCustom01" value="" required>     
            @endif
            
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-10 mb-3">
            <label for="validationCustom01" class="form-label">Тип спорта</label>
            <br>
            <select class="form-select" name="type_sport_id" aria-label="Выберите пункт">
              @if (isset($post))
                @if ($post->type_sport_id === 1)
                    <option selected value="1">Футбол</option>
                @endif
                @if ($post->type_sport_id === 2)
                    <option selected value="2">Хокей</option>
                @endif
                @if ($post->type_sport_id === 3)
                    <option selected value="3">MMA</option>
                @endif
                @if ($post->type_sport_id === 4)
                    <option selected value="4">Теннис</option>
                @endif
                @if ($post->type_sport_id === 5)
                    <option selected value="5">Киберспорт</option>
                @endif
              @endif
              <option value="1">Футбол</option>
              <option value="2">Хокей</option>
              <option value="3">MMA</option>
              <option value="4">Теннис</option>
              <option value="5">Киберспорт</option>
            </select>
          </div>

          <div class="col-md-10 mb-3">
            <label for="validationCustom01" class="form-label">Keywords поста</label>
            @if (isset($post))
            <input type="text" class="form-control" name="keywordsText" id="validationCustom01" value="{{$post->keywordsText ?? ''}}" required>
            @else
            <input type="text" class="form-control" name="keywordsText" id="validationCustom01" value="" required>
            @endif
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-10 mb-3">
            <label for="validationCustom01" class="form-label">Descriotion поста</label>
            @if (isset($post))
            <input type="text" class="form-control" name="DescText" id="validationCustom01" value="{{$post->DescText ?? ''}}" required>
            @else
            <input type="text" class="form-control" name="DescText" id="validationCustom01" value="" required>
            @endif
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-10 mb-3">
            <label for="validationCustom01" class="form-label">Название поста</label>
            @if (isset($post))
            <input type="text" class="form-control" name="h1Text" id="validationCustom01" value="{{$post->h1Text ?? ''}}" required>
            @else
            <input type="text" class="form-control" name="h1Text" id="validationCustom01" value="" required>
            @endif
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-10 mb-3">
            <label for="formFile" class="form-label">Выберите изображение</label>
            <input class="form-control formFile" name="bigPicture" type="file" id="formFile">
          </div>
          <div class="col-md-10 mb-3">
            <div class="parent_image">
              @if (isset($post))
              <img width="250" src="http://localhost{{Storage::url($post->bigPicture)}}" class="border img-thumbnail">
              @endif
            </div>
          </div>

          <div class="col-md-10 ml-0 pl-0">
              <label for="validationCustom01" class="form-label">Пост</label>
          </div>
          <div class="col-md-10 mb-3 border">
            <div id="editorjs"></div>
          </div>
          <div class="col-md-10 mb-3">
            <label for="validationCustom01" class="form-label">Хештеги, через запятую</label>
            <input type="text" class="form-control" name="h1Text" id="hashtag" value="{{$post->h1Text ?? ''}}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-10 mb-3">
            <label for="validationCustom01" class="form-label">Публикация поста</label>
            <br>
            <select class="form-select" name="public" aria-label="Выберите пункт">
              @if (isset($post))
                @if ($post->public === true)
                    <option selected value="1">Опубликовано</option>
                @endif
                @if ($post->public === false)
                    <option selected value="0">НЕ публиковано</option>
                @endif
              @endif
              <option value="1">Опубликовать</option>
              <option value="0">Снять с публикации</option>
            </select>
          </div>
          <div class="col-md-10 mb-3">
              <button type="submit" class="btn btn-primary w-100 mx-0 px-0">Сохранить</button>
          </div>
        </form>
        
        <script>
          
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
            },
            @if (isset($post))
            data: {
            blocks : {!!$post->eDataOrigin!!} ,
          }
          @endif
            
            
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
                @if (isset($post)) 
                oData.append('id', '{{$post->id  ?? ''}}');
                @endif

                // oData.append('eData2', output.blocks);

                oData.append('eDataOrigin', JSON.stringify(output.blocks));

                var oReq = new XMLHttpRequest();
                oReq.open("POST", "/auth/save/post", true);
                oReq.onreadystatechange = function() {
                  if (oReq.readyState === 4) {
                    document.querySelector(".bt-5-success").style.display = "block";
                    document.getElementById("success").innerHTML = 'Пост сохранён';
                    setTimeout(() => {
                      document.querySelector(".bt-5-success").style.display = "none";
                    }, 5000);

                    
                  }
                }
                oReq.send(oData);
            }).catch((error) => {
                return error;
            });

            ev.preventDefault();
        }, false);
      </script>
      <script src="/js/image-upload.js"></script>
        

