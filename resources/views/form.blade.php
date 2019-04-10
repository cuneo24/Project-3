@extends('layouts.master')

@section('title')
    Harvard Campus Services Business Card Creator
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="/css/style.css">
@endsection

@section('logo')
    <img src='images/harvard_shield.png' alt='harvard logo' id='formLogo'>
@endsection

@section('form')
    <form method='get' action='/process'>

        <!-- first name -->
        <label>First name:<br>
            <input type='text' name='firstName' value='{{old('firstName')}}'>
        </label>
        <br>

        <!-- last name -->
        <p>

            <label>Last name:<br>
                <input type='text' name='lastName' value='{{old('lastName')}}'>
            </label>
        </p>

        <!-- position -->
        <p>
            <label>Position:<br>
                <input type='text' name='position' value='{{old('position')}}'>
            </label>
        </p>

        <!-- department -->
        <p>

            <label>Department:<br>
                <select name='department'>
                    <option value='none'>Choose one...</option>
                    <option value='Dining' @if(old('department') == 'Dining'){{'selected'}}@endif>Dining</option>
                    <option value='Event Management' @if(old('department') == 'Event Management'){{'selected'}}@endif>Event Management</option>
                    <option value='Harvard Faculty Club' @if(old('department') == 'Harvard Faculty Club'){{'selected'}}@endif>Harvard Faculty Club</option>
                    <option value='Harvard Real Estate' @if(old('department') == 'Harvard Real Estate'){{'selected'}}@endif>Harvard Real Estate</option>
                    <option value='Office for Sustainability' @if(old('department') == 'Office for Sustainability'){{'selected'}}@endif>Office for Sustainability</option>
                    <option value='Energy and Facilities' @if(old('department') == 'Energy and Facilities'){{'selected'}}@endif>Energy and Facilities</option>
                    <option value='Global Support Services' @if(old('department') == 'Global Support Services'){{'selected'}}@endif>Global Support Services</option>
                    <option value='Harvard International Office' @if(old('department') == 'Harvard International Office'){{'selected'}}@endif>Harvard International Office</option>
                    <option value='Harvard University Housing' @if(old('department') == 'Harvard University Housing'){{'selected'}}@endif>Harvard University Housing</option>
                    <option value='Transportation' @if(old('department') == 'Transportation'){{'selected'}}@endif>Transportation</option>
                </select>
            </label>

        </p>

        <!-- work address -->

        <label>Work address:<br>
            <input type='text' name='workAddress' value='{{old('workAddress')}}'>
        </label>
        <br>

        <!-- work phone -->
        <p>

            <label>Work phone:<br>
                <input type='tel' name='workPhone' value='{{old('workPhone')}}'>
            </label>
            <br>

        </p>

        <!-- cell phone -->
        <p>

            <label>Cell phone:<br>
                <input type='tel' name='cellPhone' value='{{old('cellPhone')}}'>
            </label>
            <br>

            <label>
                <input type='checkbox'
                       class='omitField'
                       name='omitCell' @if(old('omitCell') == 'on'){{'checked'}}@endif></label><em>Check to omit personal cell phone</em>

        </p>

        <!-- work email -->
        <p>

            <label>Work email:<br>
                <input type='email' name='workEmail' value='{{old('workEmail')}}'>
            </label>

        </p>

        <!-- department email -->
        <p>
            <label>Department email:<br>
                <input type='email' name='departmentEmail' value='{{old('departmentEmail')}}'><br>
            </label>

            <label>
                <input type='checkbox'
                       class='omitField'
                       name='omitDepartment' @if(old('omitDepartment') == 'on'){{'checked'}}@endif></label><em>Check to omit department email</em>

        </p>

        <input type='submit' value='SUBMIT'>

    </form>
@endsection


@section('errors')
    <div id='wrapperErrors'>
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection

@section('businessCard')
    @if(old('firstName') != null && count($errors) == 0)
        <br>
        <div id='wrapperCard'>
            <span id='cardHeader1'>HARVARD</span><br>
            <span id='cardHeader2'>CAMPUS SERVICES</span><br>
            <img src='images/harvard_shield.png' id='miniShield' alt='harvard logo'><br>
            <!-- This is where variables are tested for accessibility -->

            <span id='cardName'>
            {{old('firstName')}}
                {{old('lastName')}}
        </span><br>
            <span id='cardPosition'>{{old('position')}}</span><br>
            {{old('department')}}<br>
            {{old('workAddress')}}<br>
            {{'T ' . old('workPhone')}}

            @if(old('omitCell') != 'on')
            &emsp;{{'C ' . old('cellPhone')}}
            @endif
            <br>
            {{old('workEmail')}}
            @if(old('omitDepartment') != 'on')
            &emsp;{{old('departmentEmail')}}
            @endif
        </div>
    @endif
@endsection