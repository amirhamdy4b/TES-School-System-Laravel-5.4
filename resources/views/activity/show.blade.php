@extends('layouts.master')

@section('title', 'View Activity')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Activity details</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="active">
                        <strong>Activity details</strong>
                    </li>
                </ol>
            </div>
        </div>

        {{--
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content text-center">

                                <h2>
                                    <i class="fa fa-expand"> </i> Resize the window to see how behaves responsive video.
                                </h2>
                                <small>Just put video on <code>figure > iframe</code> element. Script will do the rest.</small>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Video window</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <figure>
        --}}
        {{--
                                    <iframe width="425" height="349" src="http://www.youtube.com/embed/bwj2s_5e12U"
                                            frameborder="0" allowfullscreen></iframe>
        --}}{{--

                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Video description</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Microsoft's Concept of How 2019 Will Look Like - Official Video</strong></h4>
                                <p><i class="fa fa-clock-o"></i> Uploaded on October 27, 2011</p>
                                <h5>
                                    Science and Technology
                                </h5>
                                <p>
                                    What do you think the world will look like in 2019? Predicting future trends is usually done
                                    poorly by Analysts so company's seem to want to give consumer a glimpse of what
                                    they want the future to look like.
                                    <br/>
                                    <br/>
                                    <small>Microsoft has just released a video showcasing magical<br/> gadget after magical
                                        gadget.
                                    </small>
                                    <br/>
                                    <br/>
                                    Earlier this month "Microsoft Office Labs Vision 2019,"
                                    was released and now we have "Productivity Future Vision (2011)". Both are inspiring and
                                    beautifully edited.
                                </p>
                                <div class="row m-t-md">
                                    <div class="col-md-3">
                                        <h5><strong>169</strong> Likes</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <h5><strong>28</strong> Comments</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        --}}
    </div>
@endsection

@section('scripts')
    {{--
        <script>
            $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange', function (e) {
                $('body').hasClass('fullscreen-video') ? $('body').removeClass('fullscreen-video') : $('body').addClass('fullscreen-video')
            });
        </script>
    --}}
@endsection