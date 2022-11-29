@extends('layouts.master')
@section('title','Edit Collection | Creative Pub')
@section('content')
<p class="text-register_orange font-sans font-bold text-2xl text-center mt-6 mb-10">WHAT ARE YOU WORKING ON?</p>

@foreach($collection as $c)
    <form method="POST" action="/edit_collection_no_cover" id="collectionForm" enctype="multipart/form-data">
    @csrf
    <div class="container-2xl md:flex grid grid-cols-2 px-32">
    <input type="hidden" id="token" value="{{ @csrf_token() }}">
    <input type="hidden" name="collectionId" id="collectionId" value="{{ $c->idCollection }}">

            <div class="container-2xl w-1/2 h-80">
                <label for="fileCollection" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="items-center pt-5 pb-6">
                        <p class="text-white text-center font-medium text-xl mb-9">Edit your content</p>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input name="fileCollection" id="fileCollection" type="file" class="hidden" />
                </label>
            </div>
            
            <div class="container-2xl md:flex flex-1 justify-center px-44">
                <div class="container">
                    <div class="container">
                        <p class="text-white text-xl font-semibold ">Project Tittle</p>
                        <input name="titleCollection" id="titleCollection" class=" bg-white rounded-lg w-10/12 h-10 mt-2" type="text" value="{{$c->titleCollection}}" required>
                    </div>
                    <div class="container mt-4">
                        <p class="text-white text-xl font-semibold ">Tools Used</p>
                            <select class="bg-white rounded-lg w-80 h-10 mt-2" name="toolsCollection" id="toolsCollection" form="collectionForm" value="{{$c->toolsCollection}}" required>
                                <option value="Photoshop">Photoshop</option>
                                <option value="Audition">Audition</option>
                                <option value="Aftereffect">After Effect</option>
                                <option value="Illustrator">Illustrator</option>
                                <option value="Premier">Premier</option>
                                <option value="ArcStudio">ArcStudio</option>
                                <option value="Other">Other</option>
                            </select>
                    </div>
                    <div class="container-2xl mt-4">
                        <p class="text-white text-xl font-semibold ">Category</p>
                        <select class="bg-white rounded-lg w-10/12 h-10 mt-2" name="categoryCollection" id="categoryCollection" placeholder="{{$c->categoryCollection}}" form="collectionForm" required>
                            <option value="" disabled selected>{{$c->categoryCollection}}</option>
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                            <option value="audio">Audio</option>
                            <option value="script">Script</option>
                        </select>
                    </div>
                    <div class="container-2xl mt-4">
                        <p class="text-white text-xl font-semibold ">Description Projects</p>
                        <textarea id="descriptionCollection" name="descriptionCollection" class="bg-white rounded-lg w-10/12 h-32 mt-2" form="collectionForm"  required>{{$c->descriptionCollection}}</textarea>
                    </div>
                    <div class="container-2xl mt-4">
                        <p class="text-white text-xl font-semibold ">Project Tags</p>
                        <input id="tagsCollection" name="tagsCollection" class=" bg-white rounded-lg w-10/12 h-16 mt-2" value="{{$c->tagsCollection}}" type="text">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="container-2xl md:flex mt-16 pb-5 justify-center">            
            <button id="button" name="button" value="draft"  class="bg-white rounded-lg w-80 h-10 text-register_orange text-base font-medium mr-32">Save as Draft</button>
            <button id="button" name="button" value="continue" class="bg-register_orange rounded-lg w-80 h-10 text-white text-base font-medium"  data-modal-toggle="continueCollectionModal">Continue</button>
        </div>

    </form>
@endforeach
        <div id="continueCollectionModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div id="collectionModal" class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                
            </div>
        </div>


<script>
    $(document).ready(function(){
        $("#collectionForm button").click(function(e){
            // e.preventDefault();
            if ($(this).attr("value") == "continue") {            
                $("#collectionForm").submit(function(e){
                    e.preventDefault();
                });
                var formData = new FormData();
                if($('#fileCollection').val()){
                    var file = $('#fileCollection').prop('files')[0];
                    formData.append('fileCollection', file);
                    formData.append('titleCollection', $('#titleCollection').val());
                    formData.append('toolsCollection', $('#toolsCollection').val());
                    formData.append('categoryCollection', $('#categoryCollection').val());
                    formData.append('descriptionCollection', $('#descriptionCollection').val());
                    formData.append('tagsCollection', $('#tagsCollection').val());
                    formData.append('cllectionId', $('#collectionId').val());
                    formData.append('button', 'continue');
                } else {
                    formData.append('titleCollection', $('#titleCollection').val());
                    formData.append('toolsCollection', $('#toolsCollection').val());
                    formData.append('categoryCollection', $('#categoryCollection').val());
                    formData.append('descriptionCollection', $('#descriptionCollection').val());
                    formData.append('tagsCollection', $('#tagsCollection').val());
                    formData.append('collectionId', $('#collectionId').val());
                    formData.append('button', 'continue');
                }
                
            }
            if ($(this).attr("value") == "draft") {
                var formData = new FormData();
                if($('#fileCollection').val()){
                    var file = $('#fileCollection').prop('files')[0];
                    formData.append('fileCollection', file);
                    formData.append('titleCollection', $('#titleCollection').val());
                    formData.append('toolsCollection', $('#toolsCollection').val());
                    formData.append('categoryCollection', $('#categoryCollection').val());
                    formData.append('descriptionCollection', $('#descriptionCollection').val());
                    formData.append('tagsCollection', $('#tagsCollection').val());
                    formData.append('button', 'draft');
                    return;
                } else {
                    formData.append('titleCollection', $('#titleCollection').val());
                    formData.append('toolsCollection', $('#toolsCollection').val());
                    formData.append('categoryCollection', $('#categoryCollection').val());
                    formData.append('descriptionCollection', $('#descriptionCollection').val());
                    formData.append('tagsCollection', $('#tagsCollection').val());
                    formData.append('button', 'draft');
                    return;
                }
                
            }       
            

          

            // Don't use serialize here, as it is used when we want to send the data of entire form in a query string way and that will not work for file upload

            $.ajax({
                url: '/edit_collection_no_cover',
                method: 'post',
                data: formData,
                contentType : false,
                processData : false,
                headers: {
                    'X-CSRF-TOKEN': $("#token").val()
                },
                success: function(response){
                    // Do what ever you want to do on sucsess
                    var htmlCode = "";

                        htmlCode  = '<form method="POST" action="/edit_collection_cover" id="collectionCoverForm" enctype="multipart/form-data">' +
                            '@csrf' +
                            '<input type="text" name="collectionId" id="collectionId" value="'+response+'"class="hidden">' +
                            '<div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">' +
                                    '<div class="container">'+
                                        '<p class="text-white text-center font-medium px-8 text-xl mb-9">Upload your Collection Cover</p>' +
                                        '<div class="container md:flex justify-center">'+
                                            '<div class="container-2xl w-1/2 h-80">'+
                                                '<label for="collectionCover" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">'+
                                                    '<div class="items-center pt-5 pb-6">'+
                                                        '<p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>'+
                                                        '<p class="text-xs text-gray-500 dark:text-gray-400"> PNG or JPG(MAX. 800x400px)</p>'+
                                                    '</div>'+
                                                    '<input name="collectionCover" id="collectionCover" type="file" class="hidden" />'+
                                                '</label>'+
                                            '</div>'+
                                        '</div>'+
                                        '<p class="text-white font-light text-base pt-2 text-center">Minimum size of "214px x 212px"</p>'+
                                    '</div>'+
                                '<div class="container-2xl pt-5 md:flex flex-1 items-center gap-3">'+
                                    '<input type="checkbox" class="bg-transparent default:ring-2 w-4 h-4" required>'+
                                    '<p class="font-sans text-lg text-white">'+
                                        'I Agree to the <strong class="font-sans text-lg font-bold text-register_orange">Licence Terms </strong>and <strong class="font-sans text-lg font-bold text-register_orange">Copyright Terms </strong>'+
                                    '</p>'+
                                '</div>'+
                                '<div class="container-2xl pt-5 md:flex flex-1 items-center">'+
                                    '<button id="button" name="button" value="draft" class="bg-white rounded-lg w-80 h-10 text-register_orange text-base font-medium mr-32">Save as Draft</button>'+
                                    '<button id="button" name="button" value="publish" class="bg-register_orange rounded-lg w-80 h-10 text-white text-base font-medium">Publish Now</button>'+
                                '</div>'+
                            '</div>'+
                        '</form>';
                        
                        $('#collectionModal').html(htmlCode);
                        }
            });
        })
    })
</script>
@endsection

