<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <?= view(auth('role') . '/modals'); ?>
    <?= view('patient/components/content_header'); ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <?= view('patient/components/sub_sidebar', $title); ?>
                </div>

                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo base_url(); ?>assets/img/person_clipart.png" alt="" class="mb-2" style="width:100%;">
                                    <h4>28, Male</h4>

                                    <div class="form-group">
                                        <!-- <div class="col-md-7">
                                            <label for="">Date of First Admission: </label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" value="2020/01/01" disabled>
                                        </div> -->
                                        <label for="">Date of First Admission: </label>
                                        <input type="text" class="form-control" value="2020/01/01" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Number of Admission: </label>
                                        <input type="text" class="form-control" value="2" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Date of Last Admission: </label>
                                        <input type="text" class="form-control" value="2020/01/01" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Active Court Case: </label>
                                        <input type="text" class="form-control mb-2" value="Yes/No" disabled>
                                        <a href=""><u>View Court Case</u></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body" style="font-size:large;">

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Height: </label>
                                        <span> 5'7" </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Weight: </label>
                                        <span> 120 lbs </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Built: </label>
                                        <span> Medium </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Hair: </label>
                                        <span> Black </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Eyes: </label>
                                        <span> Black </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Mustache/Beard: </label>
                                        <span> Pedro Gil, Manila </span>
                                    </div>

                                    <br>
                                    <br>
                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Identifying Marks: </label>
                                        <span> (Scars, Tattoos, Moles, etc.)</span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Physical Pecculiarities: </label>
                                        <span> N/A </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Remarks: </label>
                                        <span> None </span>
                                    </div>

                                    <?php if (auth('role') == 'nurse') { ?>
                                        <div class="d-flex justify-content-end">
                                            <a href=""><u>Edit</u></a>
                                        </div>
                                    <?php } ?>

                                    <hr>

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <small class="mb-0"><i>Encoded by Burr Herber, RN; </i></small><br>
                                            <small class="mt-0"><i><u><a href="#">View Previous Patient Identifying Marks</a></u></i></small>
                                        </div>
                                        <?php if (auth('role') == 'nurse') { ?>
                                            <div>
                                                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-marks">Add Patient Identifying Marks
                                                    <i class="ml-1 fas fa-plus"></i>
                                                </button>
                                            </div>
                                        <?php } ?>

                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body" style="font-size:large;">

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Relative/Escort: </label>
                                        <span> Relative/Escort Name </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Contact Number: </label>
                                        <span> +63917 5999 883 </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Admitting Nurse: </label>
                                        <span> Burr Herber, RN </span>
                                    </div>

                                    <div class="form-inline mb-2">
                                        <label for="" class="mr-2">Date: </label>
                                        <span> March 31, 2021 </span>
                                    </div>

                                    <?php if (auth('role') == 'nurse') { ?>
                                        <div class="d-flex justify-content-end">
                                            <a href=""><u>Edit</u></a>
                                        </div>

                                        <hr>

                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary">Save
                                            </button>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

</div>

<script>
    $(document).ready(function() {

        $("#modal-marks").on('shown.bs.modal', function() {

            // SETTING ALL VARIABLES
            // Source: https://codepen.io/yananas/pen/rwvZvY

            var isMouseDown = false;
            var canvas = document.createElement('canvas');
            var body = document.getElementById("marks-body");
            var ctx = canvas.getContext('2d');
            var linesArray = [];
            currentSize = 1;
            var currentColor = "rgb(200,20,100)";
            var currentBg = "white";

            // INITIAL LAUNCH

            createCanvas();

            // BUTTON EVENT HANDLERS

            document.getElementById('canvasUpdate').addEventListener('click', function() {
                createCanvas();
                redraw();
            });

            document.getElementById('colorpicker').addEventListener('change', function() {
                currentSize = 1;
                currentColor = this.value;
            });

            document.getElementById('bgcolorpicker').addEventListener('change', function() {
                ctx.fillStyle = this.value;
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                redraw();
                currentBg = ctx.fillStyle;
            });

            document.getElementById('controlSize').addEventListener('change', function() {
                currentSize = this.value;
                document.getElementById("showSize").innerHTML = this.value;
            });

            document.getElementById('saveToImage').addEventListener('click', function() {
                downloadCanvas(this, 'canvas', 'masterpiece.png');
            }, false);
            document.getElementById('eraser').addEventListener('click', eraser);
            document.getElementById('clear').addEventListener('click', createCanvas);
            document.getElementById('save').addEventListener('click', save);
            document.getElementById('load').addEventListener('click', load);
            document.getElementById('clearCache').addEventListener('click', function() {
                localStorage.removeItem("savedCanvas");
                linesArray = [];
                console.log("Cache cleared!");
            });

            // REDRAW 

            function redraw() {
                for (var i = 1; i < linesArray.length; i++) {
                    ctx.beginPath();
                    ctx.moveTo(linesArray[i - 1].x, linesArray[i - 1].y);
                    ctx.lineWidth = linesArray[i].size;
                    ctx.lineCap = "round";
                    ctx.strokeStyle = linesArray[i].color;
                    ctx.lineTo(linesArray[i].x, linesArray[i].y);
                    ctx.stroke();
                }
            }

            // DRAWING EVENT HANDLERS

            canvas.addEventListener('mousedown', function() {
                mousedown(canvas, event);
            });
            canvas.addEventListener('mousemove', function() {
                mousemove(canvas, event);
            });
            canvas.addEventListener('mouseup', mouseup);

            // CREATE CANVAS

            function createCanvas() {
                canvas.id = "canvas";
                canvas.width = parseInt(document.getElementById("sizeX").value);
                canvas.height = parseInt(document.getElementById("sizeY").value);
                canvas.style.zIndex = 8;
                canvas.style.position = "absolute";
                canvas.style.border = "1px solid";

                var blueprint_background = new Image();
                blueprint_background.src = '<?php echo base_url(); ?>assets/img/body-outline.gif';
                blueprint_background.onload = function() {
                    var pattern = ctx.createPattern(this, "no-repeat");
                    ctx.fillStyle = pattern;
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                    body.appendChild(canvas);
                    // ctx.fill();
                };

                // ctx.fillStyle = currentBg;

            }

            // DOWNLOAD CANVAS

            function downloadCanvas(link, canvas, filename) {
                link.href = document.getElementById(canvas).toDataURL();
                link.download = filename;
            }

            // SAVE FUNCTION

            function save() {
                localStorage.removeItem("savedCanvas");
                localStorage.setItem("savedCanvas", JSON.stringify(linesArray));
                console.log("Saved canvas!");
            }

            // LOAD FUNCTION

            function load() {
                if (localStorage.getItem("savedCanvas") != null) {
                    linesArray = JSON.parse(localStorage.savedCanvas);
                    var lines = JSON.parse(localStorage.getItem("savedCanvas"));
                    for (var i = 1; i < lines.length; i++) {
                        ctx.beginPath();
                        ctx.moveTo(linesArray[i - 1].x, linesArray[i - 1].y);
                        ctx.lineWidth = linesArray[i].size;
                        ctx.lineCap = "round";
                        ctx.strokeStyle = linesArray[i].color;
                        ctx.lineTo(linesArray[i].x, linesArray[i].y);
                        ctx.stroke();
                    }
                    console.log("Canvas loaded.");
                } else {
                    console.log("No canvas in memory!");
                }
            }

            // ERASER HANDLING

            function eraser() {
                currentSize = 25;
                currentColor = ctx.fillStyle
            }

            // GET MOUSE POSITION

            function getMousePos(canvas, evt) {
                var rect = canvas.getBoundingClientRect();
                return {
                    x: evt.clientX - rect.left,
                    y: evt.clientY - rect.top
                };
            }

            // ON MOUSE DOWN

            function mousedown(canvas, evt) {
                var mousePos = getMousePos(canvas, evt);
                isMouseDown = true
                var currentPosition = getMousePos(canvas, evt);
                ctx.moveTo(currentPosition.x, currentPosition.y)
                ctx.beginPath();
                ctx.lineWidth = currentSize;
                ctx.lineCap = "round";
                ctx.strokeStyle = currentColor;

            }

            // ON MOUSE MOVE

            function mousemove(canvas, evt) {

                if (isMouseDown) {
                    var currentPosition = getMousePos(canvas, evt);
                    ctx.lineTo(currentPosition.x, currentPosition.y)
                    ctx.stroke();
                    store(currentPosition.x, currentPosition.y, currentSize, currentColor);
                }
            }

            // STORE DATA

            function store(x, y, s, c) {
                var line = {
                    "x": x,
                    "y": y,
                    "size": s,
                    "color": c
                }
                linesArray.push(line);
            }

            // ON MOUSE UP

            function mouseup() {
                isMouseDown = false
                store()
            }

        });

    });
</script>