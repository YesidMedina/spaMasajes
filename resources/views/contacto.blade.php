@extends('layouts.template')

@section('content')

<section id="content">
    <div class="bg-3 bot-3">
        <div class="container_24">
            <div class="grid_24">
                <div class="banner-bg"><a href="#"></a></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bg-5 bot-1">
        <div class="container_24">
            <div class="grid_24">
                <div class="line"></div>
            </div>
            <div class="grid_7 top-6">
                <h3>Contact info:</h3>
                <dl class="adr">
                    <dt class="clr-1"><strong><i>Spasalon</i></strong></dt>
                    <dd>8901 Marmora Road, Glasgow, D04 89GR</dd>
                    <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
                    <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
                    <dd><span>Email:</span><a href="#" class="link">mail@spasalon.com</a></dd>
                    <dd>&nbsp;</dd>
                    <dd>9863 Mill Road, Cambridge, MG09 99HT</dd>
                    <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
                    <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
                    <dd><span>Email:</span><a href="#" class="link">mail@spasalon.com</a></dd>
                </dl>
            </div>
            <div class="grid_17">
                <div class="border-left top-6">
                    <h3>Contact form:</h3>
                    <form action="#" id="form" method="post">
                        <fieldset>
                            <label><strong>Full name:</strong>
                                <input type="text" value="">
                                <strong class="clear"></strong></label>
                            <label><strong>Email:</strong>
                                <input type="text" value="">
                                <strong class="clear"></strong></label>
                            <label><strong>Message:</strong>
                                <textarea></textarea>
                                <strong class="clear"></strong></label>
                            <strong class="clear"></strong>
                            <div class="btns"><a href="#" class="link-1">clear</a><a href="#" class="link-1">send</a></div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bg-6 bot-4">
        <div class="container_24">
            <div class="grid_24">
                <div class="line"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>


@endsection