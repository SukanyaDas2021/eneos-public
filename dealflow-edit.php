<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deal Flow Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="app-wrapper">
        <?php 
            $menu = "dealflow.php";
            include 'inc/sidebar.php' 
        ?>
        <div class="app-content">
            <div class="app-header">
                <div class="title-block">
                    <h1>Deal Flow Edit</h1>
                </div>
                <div class="d-flex gap-2 justify-content-end">
                    <a href="dealflow.php" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Back</a>
                </div>
            </div>

            <div class="alert alert-warning" role="alert">This page contains only dummy data for demonstration purposes.</div>

            <div class="pt-3 w-100 d-flex flex-column gap-3">

                <div class="app-card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Deal Company</label>
                                <input type="text" class="form-control" value="SharpEnd (iott)">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Region</label>
                                        <input type="text" class="form-control" value="W. Europe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="form-control" value="UK">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sector</label>
                                <input type="text" class="form-control" value="Industrial IT">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Technology</label>
                                <input type="text" class="form-control" value="Platform for digitally connected products">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Key words</label>
                                <textarea class="form-control">Analytics, Consumer, Data management, Information and communications technology (ICT), Information technology (IT), Packaging, Retail / Point of sales, RFID, Security, Software, Software as a service (SaaS), Tracking / Traceability</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Profile Description</label>
                                <textarea class="form-control">SharpEnd io.tt connects consumer products to digital engagement platforms through tags. Using QR codes, RFID tags or NFC connections, they connect consumers to company pages for enhanced consumer interactions. SharpEnd claims this is a more effective way to engage consumers, and leads to better participation and sales. Their product is being targeted toward big brands. </textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Technology & IP</label>
                                <textarea class="form-control">SharpEnd io.tt designs curated websites for consumer engagement which can be accessed through tags on products. They create platforms which can be informational, promote inclusion, encourage further purchasing or engage consumers through games. They claim that their product promotes consumer engagement by 15%, outperforming other forms of media.</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Market</label>
                                <textarea class="form-control">The global market value of customer engagement solutions was $19.9B in 2022 with a CAGR of 12.2% to 2030.</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Business Model</label>
                                <textarea class="form-control">The company sells consultancy services and the io.tt platform as SaaS to brands focusing on CPG, spirits & wines, and industrial.</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Management</label>
                                <textarea class="form-control">Cameron Worth, CEO. Former New Business Lead at EVRTHNG, Manager, Mobile at Jam @ Engine, Founding Team at Zappit, Group Account Director at LJ ltd, Founder & Organiser at International Social Media & Mobile Conferences, Account Manager at Automotive Brands. Rob Hollands, Managing Director. Former Managing Director at Anthem Worldwide, Digital Director at Schawk & Anthem, Account Manager at JPMH, Account Executive at TBWA/GGT.</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Innovation</label>
                                        <input type="text" class="form-control" value="4">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Business potential</label>
                                        <input type="text" class="form-control" value="5">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Assessment status</label>
                                <input type="text" class="form-control" value="PA in progress">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Rejection Reason</label>
                                <input type="text" class="form-control" value="Slow market adoption rate">
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Deal Id</label>
                                        <input type="text" class="form-control" value="FILE-2023/04-025166">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Creation Date</label>
                                        <input type="text" class="form-control" value="12.06.2023">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Stage</label>
                                        <input type="text" class="form-control" value="Early">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Founded</label>
                                        <input type="text" class="form-control" value="2012">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control">Second Floor, Paulton House, 8 Shepherdess Walk  London UK</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Website</label>
                                <input type="text" class="form-control" value="https://www.wearesharpend.com/">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Contact Email</label>
                                <input type="text" class="form-control" value="Cameron Worth: cameron@sharpend.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" value="+46 (0)76 594 6892">
                            </div>                           

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Raise</label>
                                        <input type="text" class="form-control" value="4.00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Not disclosed</label>
                                        <input type="text" class="form-control" value="FALSE">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expected valuation (pre)</label>
                                        <input type="text" class="form-control" value="10.00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Currency</label>
                                        <input type="text" class="form-control" value="GBP">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Financing round</label>
                                <textarea class="form-control">Looking for $4M in funding for expansion, product development, sales and marketing</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Syndicate</label>
                                <textarea class="form-control">Founder owned.</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Financials</label>
                                <textarea class="form-control">The company has significant consultancy revenue and is scaling up the SaaS revenue from io.tt</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Similar Companies</label>
                                <textarea class="form-control">ENEIDA, WiBotic Inc, watttron GmbH</textarea>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <a href="dealflow.php" class="btn btn-outline-primary"><i class="fa-solid fa-xmark"></i> Cancel</a>
                        <a href="dealflow.php" class="btn btn-primary"><i class="fa-solid fa-save"></i> Save</a>
                    </div>

                </div>

                <h3>Attachments</h3>

                <div class="app-card">
                    <div class="d-flex justify-content-between w-100">
                        <div class="d-flex gap-2 justify-content-start">
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-folder"></i> Create Folder</button>
                            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Upload Files</button>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-trash-can"></i> Delete</button>
                            <button class="btn btn-primary"><i class="fa-solid fa-download"></i> Download</button>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="files d-flex justify-content-between w-100">
                                <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                    <i class="fa-solid fa-folder"></i>
                                    <div class="d-flex flex-column">
                                        <span>Folder Name</span>
                                        <small>7 Folder, 15 Files</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="files d-flex justify-content-between w-100">
                                <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                    <i class="fa-solid fa-folder"></i>
                                    <div class="d-flex flex-column">
                                        <span>Folder Name</span>
                                        <small>7 Folder, 15 Files</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="files d-flex justify-content-between w-100">
                                <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                    <i class="fa-solid fa-folder"></i>
                                    <div class="d-flex flex-column">
                                        <span>Folder Name</span>
                                        <small>7 Folder, 15 Files</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="files d-flex justify-content-between w-100">
                                <div class="d-flex justify-content-start align-items-center gap-2 w-100">
                                    <i class="fa-solid fa-folder"></i>
                                    <div class="d-flex flex-column">
                                        <span>Folder Name</span>
                                        <small>7 Folder, 15 Files</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</body>
</html>