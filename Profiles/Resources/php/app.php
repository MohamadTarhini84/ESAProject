<?php
function getDrApp(){
    return '
    <div class="appointment">
                                <div class="app-top">
                                <i class="fa-regular fa-clock"></i>
                                Tue, 30 Sept at 4:00 PM
                                </div>
                                <div class="app-mid">
                                    <div class="name-desc">
                                        <div>
                                            <div class="app-name">
                                                batata me2leye
                                            </div>
                                            <div class="app-info">
                                                +961 123 123
                                            </div>
                                        </div>
                                        <button class="app-desc" onclick="toggle(\'desc-popup\')">
                                            show description
                                        </button>
                                    </div>
                                    <div class="app-triple">
                                        <div class="app-room">
                                            <div class="app-name">
                                                Room
                                            </div>
                                            <div class="app-info" style="font-size:10px">
                                                adadadadsdadadadadad
                                            </div>
                                        </div>
                                        <div class="app-status">
                                            <div class="app-name">
                                                Status
                                            </div>
                                            <div class="app-info">
                                                Confirmed
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-edit-delete">
                                <button class="app-button">
                                    <i class="fa fa-duotone fa-check"></i>
                                    Confirm
                                </button>
                                <button class="app-button delete-one-app" onclick="deleteApp()" style="border-left:1px solid var(--light)">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                                </div>
                            </div>
    ';
}
?>