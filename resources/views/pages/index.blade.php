@extends('layouts/app')

@section('content')
<main class="custom-container clearfix">
        <div class="index-img">
        <img src="{{asset('assets/img/borodinsky-logo.png')}}">
        </div>
        <div class="main-info clearfix">
            <div class="info-elem">
                <b class='info-tittle'>Rapid</b>
                <p>We make all our work realy rapidly</p>
            </div>
            <div class="info-elem">
                <b class='info-tittle'>Cheap</b>
                <p>We've got only low prices</p>
            </div>
            <div class="info-elem">
                <b class='info-tittle'>Quality</b>
                <p>Our barabers are true masters</p>
            </div>
        </div>
        <div class="index-content clearfix">
            <div class="content-left">
                <h2><a name="news"> News</a></h2>
                <ul>
                    <ul>
                        <p>Yesterday morning was the beggining of previous day, and the sun was shining - 'cause it was morning
                        </p>
                        <time>21.10.19</time>
                    </ul>
                    <ul>
                        <p>About month ago we bought a few new armchairs for our clien. Tis not a hint. Just information</p>
                        <time>21.10.19 </time>
                    </ul>
                    <ul>
                        <p>My imagination can't create the third news block. Sorry.</p>
                        <time>21.10.19</time>
                    </ul>
                    <a href="https://www.thetimes.co.uk/" class='custom-btn'>More</a>
                </ul>
            </div>
            <div class="content-right">
                <h2 class="content-tittle">Photogallery</h2>
                <figure class="gallery-content">
                    <img src="{{asset('assets/img/gallery-elem-1.jpg')}}" alt="gallery-photo">
                </figure>
                <button class="custom-btn gallery-btn">Previous</button>
                <button class="custom-btn gallery-btn">Next</button>
            </div>
        </div>
        <div class="index-content clearfix">
            <div class="content-left">
                <h2><a name='about'>About us</a></h2>
                <p>Our adress is Kiev <br> Boulevard of broken dreams 7 <br> flat 44
                </p>
                <p> Working hours: <br> MN-FR: 10:00 - 22:00 <br> ST-SN: 10:00 - 18:00
                </p>
                <a href="https://goo.gl/maps/nUkZujFfecPkV5Rc9" class="custom-btn">How to get?</a>
                <button class="custom-btn">Contact me</button>
            </div>
            <div class="content-right">
                <h2 class="content-tittle"><a name="order"> Make an order</a></h2>
                <p>Here you can make an order</p>
            <form class='apointment-form' action="{{action('pagesController@save_request')}}" method='GET'>
                <div class="form-element">
                    <label for="name">Full name:</label>
                    <input type="text" name='name' placeholder="Name Surname">
                </div>
                <div class="form-element">
                    <label for="phone">Phone number:</label>
                    <input type="text" name='phone' placeholder="0970002200">
                </div>
                <div class="form-element">
                    <label for="date">Date:</label>
                    <input type="text" name='date' placeholder='2020-01-01'>
                </div>
                <div class="form-element">
                    <label for="time">Time:</label>
                    <input type="text" name='time' placeholder="00:00">
                </div> 
                <div class="form-element">
                    <input type="submit" class="custom-btn" placeholder='Make an order' value="Submit">
                </div> 
                </form>
            </div>
        </div>
    </main>
@endsection