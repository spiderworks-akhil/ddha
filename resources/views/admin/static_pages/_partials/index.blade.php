<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content &&
            isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>
        {{-- <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[banner_description]"
                class="form-control editor">@if($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
        </div> --}}
        <div class="form-group ">
            @php
            $media_id_banner_image = ($obj->content &&
            isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image',
            'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]',
            'id'=>'content_image_1', 'display'=> 'horizontal'])
        </div>
        <!--end form-group-->
        <div class="row">
            <div class="form-group col-md-6 ">
                <label>Button 1</label>
                <input type="text" name="content[banner_btn_text_1]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_text_1'])) value="{{$obj->content['banner_btn_text_1']}}" @endif >
                <input type="text" name="content[banner_btn_link_1]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_link_1'])) value="{{$obj->content['banner_btn_link_1']}}" @endif >
            </div>
            <div class="form-group col-md-6 ">

                <label>Button 2</label>
                <input type="text" name="content[banner_btn_text_2]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_text_2'])) value="{{$obj->content['banner_btn_text_2']}}" @endif >
                <input type="text" name="content[banner_btn_link_2]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_link_2'])) value="{{$obj->content['banner_btn_link_2']}}" @endif >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 ">
                <label>Badj</label>
                <input type="text" name="content[banner_btn_text_3]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_text_3'])) value="{{$obj->content['banner_btn_text_3']}}" @endif >
                {{-- <input type="text" name="content[banner_btn_link_3]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_link_3'])) value="{{$obj->content['banner_btn_link_3']}}" @endif > --}}
            </div>
            <div class="form-group col-md-4 ">

                <label>Badj</label>
                <input type="text" name="content[banner_btn_text_4]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_text_4'])) value="{{$obj->content['banner_btn_text_4']}}" @endif >
                {{-- <input type="text" name="content[banner_btn_link_4]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_link_4'])) value="{{$obj->content['banner_btn_link_4']}}" @endif > --}}
            </div>
            <div class="form-group col-md-4 ">

                <label>Badj</label>
                <input type="text" name="content[banner_btn_text_5]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_text_5'])) value="{{$obj->content['banner_btn_text_5']}}" @endif >
                {{-- <input type="text" name="content[banner_btn_link_5]" class="form-control" @if($obj->content &&
                isset($obj->content['banner_btn_link_5'])) value="{{$obj->content['banner_btn_link_5']}}" @endif > --}}
            </div>
        </div>
    </fieldset>
    <h3>Section 2</h3>
    <fieldset>

        <div class="row">
            <div class="form-group col-md-6 ">
                <label><img src="{{asset('assets/img/board-1.png')}}" width="50" alt=""></label>
                <input type="text" name="content[section_2_text_1]" class="form-control" @if($obj->content &&
                isset($obj->content['section_2_text_1'])) value="{{$obj->content['section_2_text_1']}}" @endif >
                <div class="form-group ">
                    @php
                    $media_id_section_2_img_1 = ($obj->content &&
                    isset($obj->content['media_id_section_2_img_1']))?$obj->content['media_id_section_2_img_1']:null;
                    @endphp
                    @include('admin.media.set_file', ['file'=>$media_id_section_2_img_1, 'title'=>'Image',
                    'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_2_img_1]',
                    'id'=>'media_id_section_2_img_1', 'display'=> 'vertical'])
                </div>
            </div>
            <div class="form-group col-md-6 ">

                <label><img src="{{asset('assets/img/board-2.png')}}" width="50" alt=""></label>
                <input type="text" name="content[section_2_text_2]" class="form-control" @if($obj->content &&
                isset($obj->content['section_2_text_2'])) value="{{$obj->content['section_2_text_2']}}" @endif >
                <div class="form-group ">
                    @php
                    $media_id_section_2_img_2 = ($obj->content &&
                    isset($obj->content['media_id_section_2_img_2']))?$obj->content['media_id_section_2_img_2']:null;
                    @endphp
                    @include('admin.media.set_file', ['file'=>$media_id_section_2_img_2, 'title'=>'Image',
                    'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_2_img_2]',
                    'id'=>'media_id_section_2_img_2', 'display'=> 'vertical'])
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 ">
                <label><img src="{{asset('assets/img/board-3.png')}}" width="50" alt=""></label>
                <input type="text" name="content[section_2_text_3]" class="form-control" @if($obj->content &&
                isset($obj->content['section_2_text_3'])) value="{{$obj->content['section_2_text_3']}}" @endif >
                <div class="form-group ">
                    @php
                    $media_id_section_2_img_3 = ($obj->content &&
                    isset($obj->content['media_id_section_2_img_3']))?$obj->content['media_id_section_2_img_3']:null;
                    @endphp
                    @include('admin.media.set_file', ['file'=>$media_id_section_2_img_3, 'title'=>'Image',
                    'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_2_img_3]',
                    'id'=>'media_id_section_2_img_3', 'display'=> 'vertical'])
                </div>
            </div>
            <div class="form-group col-md-6 ">

                <label><img src="{{asset('assets/img/board-4.png')}}" width="50" alt=""></label>
                <input type="text" name="content[section_2_text_4]" class="form-control" @if($obj->content &&
                isset($obj->content['section_2_text_4'])) value="{{$obj->content['section_2_text_4']}}" @endif >
                <div class="form-group ">
                    @php
                    $media_id_section_2_img_4 = ($obj->content &&
                    isset($obj->content['media_id_section_2_img_4']))?$obj->content['media_id_section_2_img_4']:null;
                    @endphp
                    @include('admin.media.set_file', ['file'=>$media_id_section_2_img_4, 'title'=>'Image',
                    'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_2_img_4]',
                    'id'=>'media_id_section_2_img_4', 'display'=> 'vertical'])
                </div>
            </div>
        </div>
    </fieldset>
    <h3>Section 3</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_3_description]" id="section_3_description"
                class="form-control editor">@if($obj->content && isset($obj->content['section_3_description'])) {{$obj->content['section_3_description']}} @endif</textarea>
        </div>
    </fieldset>
    <h3>Section 4</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_4_description]" id="section_4_description"
                class="form-control">@if($obj->content && isset($obj->content['section_4_description'])) {{$obj->content['section_4_description']}} @endif</textarea>
        </div>
        <a class="btn btn-secondary" href="{{route('admin.listing-items.index',[2])}}" target="_blank"><i
                class="fas fa-list"></i> Listing Items</a>
    </fieldset>
    <h3>Section 5</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_5_description]" id="section_5_description"
                class="form-control editor">@if($obj->content && isset($obj->content['section_5_description'])) {{$obj->content['section_5_description']}} @endif</textarea>
        </div>
    </fieldset>
    <h3>Section 6</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_6_description]" id="section_6_description"
                class="form-control editor">@if($obj->content && isset($obj->content['section_6_description'])) {{$obj->content['section_6_description']}} @endif</textarea>
        </div>
        <a class="btn btn-secondary" href="{{route('admin.sliders.edit',[encrypt(1)])}}" target="_blank"><i
                class="far fa-images"></i> Slider</a>
    </fieldset>

    <h3>Section 7</h3>
    <fieldset>
        <div class="form-group ">
            @php
            $media_id_section_7_img_1 = ($obj->content &&
            isset($obj->content['media_id_section_7_img_1']))?$obj->content['media_id_section_7_img_1']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_section_7_img_1, 'title'=>'Image',
            'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_7_img_1]',
            'id'=>'media_id_section_7_img_1', 'display'=> 'vertical'])
        </div>
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_7_description]" id="section_7_description"
                class="form-control editor">@if($obj->content && isset($obj->content['section_7_description'])) {{$obj->content['section_7_description']}} @endif</textarea>
        </div>
    </fieldset>
    <h3>Section 8</h3>
    <fieldset>
        <input type="text" name="content[section_8_text_1]" class="form-control" @if($obj->content &&
        isset($obj->content['section_8_text_1'])) value="{{$obj->content['section_8_text_1']}}" @endif >
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_8_description]" id="section_8_description"
                class="form-control ">@if($obj->content && isset($obj->content['section_8_description'])) {{$obj->content['section_8_description']}} @endif</textarea>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name="content[section_8_before_text]" class="form-control" @if($obj->content &&
                isset($obj->content['section_8_before_text'])) value="{{$obj->content['section_8_before_text']}}" @endif
                >
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="content[section_8_after_text]" class="form-control" @if($obj->content &&
                isset($obj->content['section_8_after_text'])) value="{{$obj->content['section_8_after_text']}}" @endif >
            </div>
        </div>
        <div class="form-group ">
            @php
            $media_id_section_8_img_1 = ($obj->content &&
            isset($obj->content['media_id_section_8_img_1']))?$obj->content['media_id_section_8_img_1']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_section_8_img_1, 'title'=>'Image',
            'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_8_img_1]',
            'id'=>'media_id_section_8_img_1', 'display'=> 'vertical'])
            <input type="text" name="content[section_8_text_2]" class="form-control" @if($obj->content &&
            isset($obj->content['section_8_text_2'])) value="{{$obj->content['section_8_text_2']}}" @endif >
        </div>
        <div class="row form-group">
            <div class="col-md-6">
                @php
                $media_id_section_8_img_2 = ($obj->content &&
                isset($obj->content['media_id_section_8_img_2']))?$obj->content['media_id_section_8_img_2']:null;
                @endphp
                @include('admin.media.set_file', ['file'=>$media_id_section_8_img_2, 'title'=>'Image',
                'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_8_img_2]',
                'id'=>'media_id_section_8_img_2', 'display'=> 'vertical'])
                <textarea name="content[section_8_text_3]" id="section_8_text_3"
                    class="form-control ">@if($obj->content && isset($obj->content['section_8_text_3'])) {{$obj->content['section_8_text_3']}} @endif</textarea>
            </div>
            <div class="col-md-6">
                @php
                $media_id_section_8_img_3 = ($obj->content &&
                isset($obj->content['media_id_section_8_img_3']))?$obj->content['media_id_section_8_img_3']:null;
                @endphp
                @include('admin.media.set_file', ['file'=>$media_id_section_8_img_3, 'title'=>'Image',
                'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_section_8_img_3]',
                'id'=>'media_id_section_8_img_3', 'display'=> 'vertical'])
                <textarea name="content[section_8_text_4]" id="section_8_text_4"
                    class="form-control ">@if($obj->content && isset($obj->content['section_8_text_4'])) {{$obj->content['section_8_text_4']}} @endif</textarea>
            </div>

        </div>

    </fieldset>
    <h3>Section 9</h3>
    <fieldset>
        <a class="btn btn-secondary" href="{{route('admin.sliders.edit',[encrypt(1)])}}" target="_blank"><i
                class="far fa-images"></i> Photo Gallery</a>
    </fieldset>
    <h3>Section 10</h3>
    <fieldset>
        <input type="text" name="content[section_10_text_1]" class="form-control" @if($obj->content &&
        isset($obj->content['section_10_text_1'])) value="{{$obj->content['section_10_text_1']}}" @endif >
        <a class="btn btn-secondary" href="{{route('admin.listing-items.index',[3])}}" target="_blank"><i
                class="fas fa-list"></i> Listing Items</a>
    </fieldset>
    <h3>Section 11</h3>
    <fieldset>
        <input type="text" name="content[section_11_text_1]" class="form-control" @if($obj->content &&
        isset($obj->content['section_11_text_1'])) value="{{$obj->content['section_11_text_1']}}" @endif >
        <textarea name="content[section_11_description]" id="section_11_description"
            class="form-control ">@if($obj->content && isset($obj->content['section_11_description'])) {{$obj->content['section_11_description']}} @endif</textarea>
        <a class="btn btn-secondary" href="{{route('admin.listing-items.index',[4])}}" target="_blank"><i
                class="fas fa-list"></i> Listing Items</a>
    </fieldset>
    <h3>Section 12</h3>
    <fieldset>
        <input type="text" name="content[section_12_text_1]" class="form-control" @if($obj->content &&
        isset($obj->content['section_12_text_1'])) value="{{$obj->content['section_12_text_1']}}" @endif >

        <a class="btn btn-secondary" href="{{route('admin.testimonials.index')}}" target="_blank"><i
                class="fas fa-quote-left"></i> Testimonials</a>
    </fieldset>

    <!--end fieldset-->
</div>
<!--end form-->