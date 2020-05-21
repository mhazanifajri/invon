@extends('admin.layouts.default')
@section('content')
<!-- Container Begin -->
<div class="row">
    <div class="large-12 columns">
        <div class="box bg-white">
            <!-- /.box-header -->
            <div class="box-body pad-forty" style="display: block;">
                <!-- Alert -->

                <div class="row">
                    <div class="large-3 columns">
                        <p><strong>Alert</strong>
                        </p>
                        <p>Alerts are handy elements you can drop into a form or inline on a page to communicate success, warnings, failure or just information. They'll conform to 100% of the container width you put them in.</p>


                    </div>
                    <div class="large-9 columns">
                        <!-- alert info -->
                        <div class="box bg-aqua">
                            <div class="box-header bg-aqua ">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title "><i class="text-white fontello-attention-filled"></i>
                                    <span class="text-white">INFO</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                <p class="bg-aqua"><strong>Heads up! </strong> This alert needs your attention, but it's not super important.</p>
                            </div>
                        </div>
                        <!-- end of alert info -->

                        <!-- alert success -->
                        <div class="box bg-light-green">
                            <div class="box-header bg-light-green ">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title "><i class="text-white  icon-thumbs-up"></i>
                                    <span class="text-white">SUCCESS</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                <p class="text-white"><strong>Well done!</strong> You successfully read this important alert message.</p>
                            </div>
                        </div>
                        <!-- end of success info -->
                        <!-- alert warning -->
                        <div class="box bg-yellow">
                            <div class="box-header bg-yellow">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title "><i class="text-white fontello-warning"></i>
                                    <span class="text-white">WARNING</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                <p class="text-white"><strong>Warning!</strong> Best check yo self, you're not looking too good.</p>
                            </div>
                        </div>
                        <!-- end of alert warning -->
                        <!-- alert error -->
                        <div class="box bg-red">
                            <div class="box-header bg-red">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title "><i class="text-white fontello-cancel-circled"></i>
                                    <span class="text-white">ERROR</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                                <p class="text-white"><strong>Oh snap!</strong> Change a few things up and try submitting again.</p>
                            </div>
                        </div>
                        <!-- end of alert error -->



                    </div>
                </div>
                <!-- end alert-->
                <!-- pagination -->
                <hr>

                <div class="row">
                    <div class="large-3 columns">
                        <p><strong>Paginations</strong>
                        </p>
                        <p>Pagination is a type of navigation that lets users tap through a series of related pages. Moving between pages has become less common with the advent of longer pages and AJAX loading, but if you need pagination, Foundation has you covered.</p>


                    </div>
                    <div class="large-9 columns">
                        <br>
                        <br>

                        <ul class="pagination">
                            <li class="arrow unavailable"><a href="#">&laquo;</a>
                            </li>
                            <li class="current"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li class="unavailable"><a href="#">&hellip;</a>
                            </li>
                            <li><a href="#">12</a>
                            </li>
                            <li><a href="#">13</a>
                            </li>
                            <li class="arrow"><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end Pagination -->
                <hr>
                <!-- tooltip -->

                <div class="row">
                    <div class="large-3 columns">
                        <p><strong>Tooltip</strong>
                        </p>
                        <p>For tooltips we use <a href="http://iamceege.github.io/tooltipster/">tooltipter</a>, A powerful, flexible jQuery plugin enabling you to easily create semantic, modern tooltips enhanced with the power of CSS.</p>
                    </div>
                    <div class="large-9 columns">
                        <button class=" radius tiny tooltipster-left" title="This is my image's tooltip message!">Left</button>
                        <button class=" radius tiny tooltipster-top" title="This is my image's tooltip message!">Top</button>
                        <button class=" radius tiny tooltipster-bottom" title="This is my image's tooltip message!">Bottom</button>
                        <button class=" radius tiny tooltipster-right" title="This is my image's tooltip message!">Right</button>

                        <button class=" radius tiny tooltipster-fadein" title="Fade animation">Fade</button>
                        <button class=" radius tiny tooltipster-growing" title="Grow animation">Grow</button>
                        <button class=" radius tiny tooltipster-swinging" title="Swing animation">Swing</button>
                        <button class=" radius tiny tooltipster-sliding" title="Slide animation">Slide</button>
                        <button class=" radius tiny tooltipster-falling" title="Fall animation">Fall</button>

                    </div>
                </div>
                <!-- end tooltip -->
                <hr>
                <!-- modal -->

                <div class="row">
                    <div class="large-3 columns">
                        <p><strong>Modal</strong>
                        </p>
                        <P>Modal dialogs, or pop-up windows, are handy for prototyping and production. Foundation includes Reveal our jQuery modal plugin, to make this easy for you</P>
                    </div>
                    <div class="large-9 columns">
                        <!-- Triggers the modals -->
                        <a href="#" data-reveal-id="firstModal" class="radius button tiny">Modal in a modal&hellip;</a>
                        <a href="#" data-reveal-id="videoModal" class="radius button tiny">Example Modal w Video&hellip;</a>

                        <!-- Reveal Modals begin -->
                        <div id="firstModal" class="reveal-modal" data-reveal>
                            <h2>This is a modal.</h2>
                            <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
                            <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
                            <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a>
                            </p>
                            <a class="close-reveal-modal">&#215;</a>
                        </div>

                        <div id="secondModal" class="reveal-modal" data-reveal>
                            <h2>This is a second modal.</h2>
                            <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
                            <a class="close-reveal-modal">&#215;</a>
                        </div>

                        <div id="videoModal" class="reveal-modal no-pad" data-reveal>

                            <div class="flex-video widescreen vimeo" style="display: block;">
                                <iframe src="http://www.youtube-nocookie.com/embed/wnXCopXXblE?rel=0" frameborder="0" allowfullscreen="" data-src="http://www.youtube-nocookie.com/embed/wnXCopXXblE?rel=0"></iframe>
                            </div>

                            <a class="close-reveal-modal">&#215;</a>
                        </div>
                        <!-- Reveal Modals end -->



                    </div>
                </div>
                <!-- end Modal -->

                <hr>
                <!-- Switches -->

                <div class="row">
                    <div class="large-3 columns">
                        <p><strong>Switches</strong>
                        </p>
                        <p>Switches are toggle element that switch between an Off and On state on tap or click. They make use of checkbox inputs (or radio buttons) and require no javascript</p>


                    </div>
                    <div class="large-9 columns">
                        <div class="switch">
                            <input id="exampleCheckboxSwitch" type="checkbox">
                            <label for="exampleCheckboxSwitch"></label>
                        </div>

                        <!-- Using radio buttons – each switch turns off the other two -->
                        <div class="switch small">
                            <input id="exampleRadioSwitch1" type="radio" checked name="testGroup">
                            <label for="exampleRadioSwitch1"></label>
                        </div>

                        <div class="switch radius">
                            <input id="exampleRadioSwitch2" type="radio" name="testGroup">
                            <label for="exampleRadioSwitch2"></label>
                        </div>

                        <div class="switch round large">
                            <input id="exampleRadioSwitch3" type="radio" name="testGroup">
                            <label for="exampleRadioSwitch3"></label>
                        </div>
                    </div>
                </div>
                <!-- end Switches -->
                <hr>
                <!-- Progress bar -->

                <div class="row">
                    <div class="large-3 columns">
                        <p><strong>Progress bar</strong>
                        </p>
                        <p>A simple way to add progress bars to your layouts. You only need two HTML elements to make them and they're easy to customize.</p>


                    </div>
                    <div class="large-9 columns">
                        <div class="progress small radius">
                            <span class="meter bg-aqua" style="width:80%"></span>
                        </div>
                        <div class="progress large radius">
                            <span class="meter bg-blue" style="width:60%"></span>
                        </div>

                        <div class="progress large radius bg-aqua">
                            <span class="meter bg-white" style="width:87%"></span>
                        </div>
                        <div class="progress large radius bg-dark-blue">
                            <span class="meter bg-white" style="width:45%"></span>
                        </div>


                    </div>
                </div>
                <!-- end of Progress bar -->

            </div>
            <!-- end .timeline -->
        </div>
        <!-- box -->
    </div>

</div>
<!-- End of Container Begin -->
@endsection
