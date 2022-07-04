@extends('layouts.master')
@section('title','Upload Job | Creative Pub')
@section('content')

<p class="text-register_orange font-sans font-bold text-2xl text-center mt-6 mb-10">RECRUIT CREATOR YOU NEEDED</p>

        <form method="POST" action="/upload_job" id="jobForm">
            @csrf
            <div class="container-2xl md:flex justify-center">
                <div class="container w-fit">
                    <div class="container">
                        <p class="text-white text-xl font-semibold ">Job Tittle</p>
                        <input name="titleJob" id="titleJob" class=" bg-white rounded-lg w-80 h-10 mt-2" type="text" required>
                    </div>
                    <div class="container mt-4">
                        <p class="text-white text-xl font-semibold ">Tools Used</p>
                        <select class="bg-white rounded-lg w-80 h-10 mt-2" name="toolsJob" id="toolsJob" form="jobForm" required>
                            <option value="Photoshop">Photoshop</option>
                            <option value="Audition">Audition</option>
                            <option value="Aftereffect">After Effect</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="Premier">Premier</option>
                            <option value="ArcStudio">ArcStudio</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="container mt-4">
                        <p class="text-white text-xl font-semibold ">Category</p>
                        <select class="bg-white rounded-lg w-80 h-10 mt-2" name="categoryJob" id="categoryJob" form="jobForm" required>
                            <option value="Image">Image</option>
                            <option value="Video">Video</option>
                            <option value="Audio">Audio</option>
                            <option value="Script">Script</option>
                        </select>
                    </div>
                    <div class="container mt-4">
                        <p class="text-white text-xl font-semibold ">Description Job</p>
                        <textarea id="descriptionJob" name="descriptionJob" class="bg-white rounded-lg w-80 h-32 mt-2" form="jobForm" required></textarea>
                    </div>
                    <div class="container mt-4">
                        <p class="text-white text-xl font-semibold ">Job Tags</p>
                        <input name="tagsJob" id="tagsJob" class=" bg-white rounded-lg w-80 h-16 mt-2" type="text" required>
                    </div>
                    <div class="container mt-4">
                        <p class="text-white text-xl font-semibold ">Due Date</p>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-register_orange " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input id="dueDateJob" name="dueDateJob" datepicker datepicker-title="Due Date Job" datepicker-buttons type="text" class="rounded-lg block w-full pl-10 p-2.5" placeholder="Select date" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex justify-center mt-16 ">
                <div>
                    <button id="button" name="button" value="publish" class="bg-register_orange rounded-lg w-80 h-10 text-white text-base font-medium" data-modal-toggle="uploadJobModal">Publish Now</button>
                </div>
            </div>
            <div class="md:flex justify-center mt-6">
                <div>
                    <button id="button" name="button" value="draft" class="bg-white rounded-lg w-80 h-10 text-register_orange text-base font-medium">Save as Draft</button>
                </div>
            </div>
        </form>

<div id="uploadJobModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    
                        <div class="container-2xl md:flex flex-1 justify-center py-3">
                            <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.1247 23.5833L33.6663 51.0416L18.708 36.125L12.833 42L33.6663 62.8333L66.9997 29.5L61.1247 23.5833ZM41.9997 0.333313C18.9997 0.333313 0.333008 19 0.333008 42C0.333008 65 18.9997 83.6667 41.9997 83.6667C64.9997 83.6667 83.6664 65 83.6664 42C83.6664 19 64.9997 0.333313 41.9997 0.333313ZM41.9997 75.3333C23.583 75.3333 8.66634 60.4167 8.66634 42C8.66634 23.5833 23.583 8.66665 41.9997 8.66665C60.4163 8.66665 75.333 23.5833 75.333 42C75.333 60.4167 60.4163 75.3333 41.9997 75.3333Z" fill="#FF8A00"/>
                            </svg>

                        </div>
                        
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Job uploaded successfully
                        </p>
                        
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans mt-10" data-modal-toggle="uploadJobModal">Done</button>  
                        </div>

                  
                </div>
                
            </div>
</div>
@endsection