<div class="navbar nav_title" style="border: 0;">
    <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Bonjour</span></a>
</div>
<div class="clearfix"></div>

            <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{ asset('CMS/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2> {{ Auth::user()->name }}</h2>
        </div>
    </div>
            

<br />