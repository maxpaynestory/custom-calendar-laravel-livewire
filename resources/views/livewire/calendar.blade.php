<div class="row1" x-on:mousedown="jsStartSelecting($event)" x-on:mousemove="jsUpdateSelecting($event)" x-on:mouseup="jsStopSelecting($event)">
    <div class="calender_topsec">
        <div class="leftsec">
            <span class="search_by">{{ $thisWeek }}</p>
            </span>
            <div class="arrow_box">
                <span class="arrow"><img src="images/my-calender/icon_lft_arrow.svg" alt="icon arrow left" /></span>
                <span class="arrow"><img src="images/my-calender/icon_rgt_arrow.svg" alt="icon arrow rgt" /></span>
            </div>
            <div class="date">9 Oct - 15 Oct 2023</div>
        </div>
        <div class="rightsec">
            <div class="filter_by">
                <select class="ui search dropdown dropdownmenu select-style" id="selectField">
                    <option value="1">Day</option>
                    <option value="2" selected>Week</option>
                    <option value="3">Month</option>
                    <option value="4">year</option>
                </select>
            </div>
            <span class="time"><img src="images/my-calender/icon_countdown.svg" alt="icon time" />
                Yet
                to
                Respond</span>
            <span class="print"><img src="images/my-calender/icon_print.svg" alt="icon print" /></span>
            <strong class="more_option"><span></span></strong>
        </div>
    </div>
    <div class="calender_content">
        <!-- week_calender start -->
        <div class="c_data week_calender d2">
            <div class="fixed_time">
                <div class="column">IST <br>04:00</div>
                <div class="column">09:00</div>
                <div class="column">10:00</div>
                <div class="column">11:00</div>
                <div class="column">12:00</div>
                <div class="column">13:00</div>
                <div class="column">14:00</div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>9</span> Sun</div>
                <div class="column unavailable"><img src="images/my-calender/icon_unavailable.svg" alt="icon unavailable" />Unavailable</div>
                <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg" alt="icon unavailable" />Unavailable</div>
                <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg" alt="icon unavailable" />Unavailable</div>
                <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg" alt="icon unavailable" />Unavailable</div>
                <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg" alt="icon unavailable" />Unavailable</div>
                <div class="column unavailable "><img src="images/my-calender/icon_unavailable.svg" alt="icon unavailable" />Unavailable</div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>10</span> Mon</div>
                @foreach($timeSlots->chunk(4) as $key=>$chunk)
                <div class="column" wire:key="{{ $key }}">
                    <div class="td1">
                        @foreach($chunk->take(2) as $slot)
                        <span id="{{ $slot['id'] }}" wire:key="{{ $slot['id'] }}" class="{{ implode(' ', $slot['classes']) }} @if(in_array($slot['id'], $selectedIds)) Output highlighted @endif">
                            {{ $slot['title'] }}
                        </span>
                        @endforeach
                    </div>

                    <div class="td2">
                        @foreach($chunk->skip(2) as $slot)
                        <span id="{{ $slot['id'] }}" wire:key="{{ $slot['id'] }}" class="{{ implode(' ', $slot['classes']) }}">
                            {{ $slot['title'] }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endforeach
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>11</span> Tue</div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time yellow">sales constellation</span>
                        <!-- mcalender_popup start -->
                        <div class="mcalender_popup">
                            <div class="top_option">
                                <span><img src="images/my-calender/icon_edit.svg" alt="icon edit" /></span>
                                <span><img src="images/my-calender/icon_delete.svg" alt="icon delete" /></span>
                                <span class="close_btn"><img src="images/my-calender/icon_cross.svg" alt="icon cross" /></span>
                            </div>
                            <div class="row_two">
                                <div class="eventcolor">
                                    <span class="roundcolor"></span>
                                </div>
                                <h3>sales constellation</h3>
                                <div class="choosecolor">
                                    <ul>
                                        <li style="background-color:#6E1588;"></li>
                                        <li style="background-color:#E1003E;"></li>
                                        <li style="background-color:#2B99F0;"></li>
                                        <li style="background-color:#FE2924;"></li>
                                        <li style="background-color:#A41E90;"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_area">
                                <div class="top_details">
                                    <strong class="app_date"><img src="images/my-calender/icon_calender.svg" alt="icon calender" /> Tuesday, 11th October
                                        2023</strong>
                                    <strong class="app_time"><img src="images/my-calender/icon_watch.svg" alt="icon watch" />
                                        11 : 00 Am - 11 : 15 Am <span>Asia /
                                            Kolkata</span></strong>
                                    <strong class="app_zoom"><img src="images/my-calender/icon_zoom.png" alt="icon zoom" /> Zoom Platform <span><img src="images/my-calender/icon_attachment.svg" alt="icon attachment" /> Copy Link</span></strong>
                                    <strong class="app_bymail"><img src="images/my-calender/icon_clock.svg" alt="icon clock" />
                                        15 min before by Email</strong>
                                </div>
                                <div class="attendees">
                                    <div class="bg_white">Attendees <strong><img src="images/my-calender/icon_user.png" />
                                            10</strong>
                                    </div>
                                </div>
                                <ul class="user_info">
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>chaitanya@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>sanatariq@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>harpreet.k@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- mcalender_popup end -->
                    </div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>12</span> Wed</div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time pingdrk">Logo Designing Discussion</span>
                        <!-- mcalender_popup start -->
                        <div class="mcalender_popup">
                            <div class="top_option">
                                <span><img src="images/my-calender/icon_edit.svg" alt="icon edit" /></span>
                                <span><img src="images/my-calender/icon_delete.svg" alt="icon delete" /></span>
                                <span class="close_btn"><img src="images/my-calender/icon_cross.svg" alt="icon cross" /></span>
                            </div>
                            <div class="row_two">
                                <div class="eventcolor">
                                    <span class="roundcolor"></span>
                                </div>
                                <h3>Logo Designing Discussion</h3>
                                <div class="choosecolor">
                                    <ul>
                                        <li style="background-color:#6E1588;"></li>
                                        <li style="background-color:#E1003E;"></li>
                                        <li style="background-color:#2B99F0;"></li>
                                        <li style="background-color:#FE2924;"></li>
                                        <li style="background-color:#A41E90;"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_area">
                                <div class="top_details">
                                    <strong class="app_date"><img src="images/my-calender/icon_calender.svg" alt="icon calender" /> Wednesday, 12th October
                                        2023</strong>
                                    <strong class="app_time"><img src="images/my-calender/icon_watch.svg" alt="icon watch" />
                                        11 : 00 Am - 11 : 15 Am <span>Asia /
                                            Kolkata</span></strong>
                                    <strong class="app_zoom"><img src="images/my-calender/icon_zoom.png" alt="icon zoom" /> Zoom Platform <span><img src="images/my-calender/icon_attachment.svg" alt="icon attachment" /> Copy Link</span></strong>
                                    <strong class="app_bymail"><img src="images/my-calender/icon_clock.svg" alt="icon clock" />
                                        15 min before by Email</strong>
                                </div>
                                <div class="attendees">
                                    <div class="bg_white">Attendees <strong><img src="images/my-calender/icon_user.png" />
                                            10</strong>
                                    </div>
                                </div>
                                <ul class="user_info">
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>chaitanya@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>sanatariq@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>harpreet.k@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- mcalender_popup end -->
                    </div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>13</span> Thu</div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>14</span> Fri</div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2">
                        <span class="b_time lightprpl full_height">Design Team Metting</span>
                        <!-- mcalender_popup start -->
                        <div class="mcalender_popup">
                            <div class="top_option">
                                <span><img src="images/my-calender/icon_edit.svg" alt="icon edit" /></span>
                                <span><img src="images/my-calender/icon_delete.svg" alt="icon delete" /></span>
                                <span class="close_btn"><img src="images/my-calender/icon_cross.svg" alt="icon cross" /></span>
                            </div>
                            <div class="row_two">
                                <div class="eventcolor">
                                    <span class="roundcolor"></span>
                                </div>
                                <h3>Design Team Metting</h3>
                                <div class="choosecolor">
                                    <ul>
                                        <li style="background-color:#6E1588;"></li>
                                        <li style="background-color:#E1003E;"></li>
                                        <li style="background-color:#2B99F0;"></li>
                                        <li style="background-color:#FE2924;"></li>
                                        <li style="background-color:#A41E90;"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_area">
                                <div class="top_details">
                                    <strong class="app_date"><img src="images/my-calender/icon_calender.svg" alt="icon calender" /> Friday, 14th October
                                        2023</strong>
                                    <strong class="app_time"><img src="images/my-calender/icon_watch.svg" alt="icon watch" />
                                        11 : 00 Am - 11 : 15 Am <span>Asia /
                                            Kolkata</span></strong>
                                    <strong class="app_zoom"><img src="images/my-calender/icon_zoom.png" alt="icon zoom" /> Zoom Platform <span><img src="images/my-calender/icon_attachment.svg" alt="icon attachment" /> Copy Link</span></strong>
                                    <strong class="app_bymail"><img src="images/my-calender/icon_clock.svg" alt="icon clock" />
                                        15 min before by Email</strong>
                                </div>
                                <div class="attendees">
                                    <div class="bg_white">Attendees <strong><img src="images/my-calender/icon_user.png" />
                                            10</strong>
                                    </div>
                                </div>
                                <ul class="user_info">
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>chaitanya@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>sanatariq@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                    <li>
                                        <img src="images/my-calender/icon_user2.png" alt="icon user" />
                                        <strong>harpreet.k@morismedia.in</strong>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- mcalender_popup end -->
                    </div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
            </div>
            <div class="make_booking">
                <div class="column th"><span>15</span> Sat</div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1"></div>
                    <div class="td2"></div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
                <div class="column">
                    <div class="td1">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                    <div class="td2">
                        <span class="b_time"></span>
                        <span class="b_time"></span>
                    </div>
                </div>
            </div>
        </div>
        <!--week_calender end -->
    </div>
</div>
<script>
    let isSelecting = false;
    const selectedIds = [];

    function addSlotIfFromEvent(event) {
        const slotId = event.target.id;
        if (!selectedIds.includes(slotId)) {
            $(`span#${slotId}`).addClass("highlighted");
            selectedIds.push(slotId);
        }
    }

    function jsStartSelecting(event) {
        if (isSelecting == false && event.target.className.includes("available")) {
            isSelecting = true;
        }
    }

    function jsUpdateSelecting(event) {
        if (isSelecting == true && event.target.className.includes("available")) {
            addSlotIfFromEvent(event);
        }
    }

    function jsStopSelecting() {
        isSelecting = false;
        Livewire.dispatch('stopSelecting', {
            selection: selectedIds
        });
        console.log("Stopped Selecting");
    }
</script>