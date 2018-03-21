{{--  @extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.articleStart')

		<h4 class="secondary"><strong>Hello World</strong></h4>
		<p>This is a test</p>

	@include('beautymail::templates.widgets.articleEnd')


	@include('beautymail::templates.widgets.newfeatureStart')

		<h4 class="secondary"><strong>Hello World again</strong></h4>
		<p>This is another test</p>

	@include('beautymail::templates.widgets.newfeatureEnd')

@stop  --}}

@extends('beautymail::templates.minty',[
    'logo'        => [
            'path'   => "http://skills.ameyem.com/images/logo1.png",
            'width'  => '',
            'height' => '',
        ]]);

@section('content')


    {{--  @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'http://google.com'
    ])  --}}


	@include('beautymail::templates.minty.contentStart')
		<tr>
			<td class="title">
				Dear {{$name}},
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
				This is to inform you that we are in process of 
				selection as we have received unprecidented number of applications. And the client require 
				some time to finalize the modalities. We will get back to you within a week time. 
				Please bear with us and refrain from enquiring on phone.
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
		<tr>
			<td class="title">
				Opportunity to learn new skills
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
				As an incentive for appearing at Ameyem Geosolutions for the post of 'Data Entry operator'
				we would like to offer a free course on 'Introductory webdevelopment'. To grab the opportunity
				please register at following link on register.
				Select 'Ameyem Skill Labs' as institute and 'student' for role.
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
		<tr>
			<td>
				@include('beautymail::templates.minty.button', ['text' => 'Register', 'link' => 'http://asdp.ameyem.com/register'])
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
		<tr>
			<td class="paragraph">
				Regards, <br>
				HR, Ameyem Geosolutions.
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
	@include('beautymail::templates.minty.contentEnd')
	

@stop


{{--  

@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Hello World!',
		'level' => 'h1'
	])

    @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary"><strong>Hello World</strong></h4>
        <p>This is a test</p>

    @include('beautymail::templates.ark.contentEnd')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Another headline',
		'level' => 'h2'
	])

    @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary"><strong>Hello World again</strong></h4>
        <p>This is another test</p>

    @include('beautymail::templates.ark.contentEnd')

@stop 



@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello!',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'http://google.com'
    ])

@stop


 --}}