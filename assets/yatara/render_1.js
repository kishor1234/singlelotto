let {remote, ipcRenderer} = require("electron");
// console.log(process.versions.electron);

const {PosPrinter} = remote.require("electron-pos-printer");
// const {PosPrinter} = require("electron-pos-printer"); //dont work in production (??)

const path = require("path");

//console.log(path.join(__dirname, '/logo.webp'));
let webContents = remote.getCurrentWebContents();
let printers = webContents.getPrinters(); //list the printers
var PrinterName;
var width = "170px";
printers.map((item, index) => {
    //write in the screen the printers for choose
    if (item.isDefault) {
        PrinterName = item.name;
    }
});

function printPos(jsonData) {

    var ticketArray = jsonData.ticket;
    for (let index in ticketArray) {
        var ticketData = ticketArray[index];
        const data = [
            {
                type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table
                value: "||---",
                style: `text-align:left;`,
                css: {"font-size": "12px"},
            },
            {
                type: 'image',
                path: 'logo.webp', // file path
                position: 'center', // position of image: 'left' | 'center' | 'right'
                width: '50px', // width of image in px; default: auto
                height: '50px', // width of image in px; default: 50 or '50px'
            },
            {
                type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table'
                value: ticketData.ticket,
                css: {
                    "font-size": "8px",
                    "font-family": "sans-serif",
                    "text-align": "left",
                },
            },
            {
                type: "barCode", // Do you think the result is ugly? Me too. Try use an image instead...
                value: ticketData.barcode,
                height: 25,
                width: 1,
                displayValue: true, // Display value below barcode
                fontsize: 8,
                position: 'left',
                style: 'margin: 0px 20px',

            },

            {
                type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table
                value: "---||",
                style: `text-align:right;`,
                css: {"font-size": "12px"},
            },
        ];

        const options = {
            preview: false, // Preview in window or print
            width: width, //  width of content body
            margin: "0px 20px 0px 0px", // margin of content body
            copies: 1, // Number of copies to print
            printerName: PrinterName, // printerName: string, check it at webContent.getPrinters()
            timeOutPerLine: 400,
            silent: true,
        };


        const d = [...data];

        if (PrinterName && width) {
            PosPrinter.print(d, options)
                    .then(() => {
                    })
                    .catch((error) => {
                        console.error(error);
                    });
        } else {
            alert("Select the printer and the width");
        }
    }
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function () {
//        if (this.readyState == 4 && this.status == 200) {
//            if (this.responseText != "false") {
//                var jsonData = JSON.parse(this.responseText);
//                var ticketArray = jsonData.ticket;
//                for (let index in ticketArray) {
//                    var ticketData = ticketArray[index];
//                    const data = [
//                        {
//                            type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table
//                            value: "||---",
//                            style: `text-align:left;`,
//                            css: {"font-size": "12px"},
//                        },
//                        {
//                            type: 'image',
//                            path: 'logo.webp', // file path
//                            position: 'center', // position of image: 'left' | 'center' | 'right'
//                            width: '50px', // width of image in px; default: auto
//                            height: '50px', // width of image in px; default: 50 or '50px'
//                        },
//                        {
//                            type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table'
//                            value: ticketData.ticket,
//                            css: {
//                                "font-size": "8px",
//                                "font-family": "sans-serif",
//                                "text-align": "left",
//                            },
//                        },
//                        {
//                            type: "barCode", // Do you think the result is ugly? Me too. Try use an image instead...
//                            value: ticketData.barcode,
//                            height: 25,
//                            width: 1,
//                            displayValue: true, // Display value below barcode
//                            fontsize: 8,
//                            position: 'left',
//                            style: 'margin: 0px 20px',
//
//                        },
//
//                        {
//                            type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table
//                            value: "---||",
//                            style: `text-align:right;`,
//                            css: {"font-size": "12px"},
//                        },
//                    ];
//
//                    const options = {
//                        preview: false, // Preview in window or print
//                        width: width, //  width of content body
//                        margin: "0px 20px 0px 0px", // margin of content body
//                        copies: 1, // Number of copies to print
//                        printerName: PrinterName, // printerName: string, check it at webContent.getPrinters()
//                        timeOutPerLine: 400,
//                        silent: true,
//                    };
//
//
//                    const d = [...data];
//
//                    if (PrinterName && width) {
//                        PosPrinter.print(d, options)
//                                .then(() => {
//                                })
//                                .catch((error) => {
//                                    console.error(error);
//                                });
//                    } else {
//                        alert("Select the printer and the width");
//                    }
//                }
//
//
//
//            }
//        }
//    };
//    xhttp.open("POST", api_url + "/?r=posTicket", true);
//    xhttp.setRequestHeader("Content-type", "application/json");
//    xhttp.send(JSON.stringify({"utrno": lasttsn}));

}

function printWinRecipt(data) {
   console.log(data);
    var jsonData = JSON.parse(data);
    if (jsonData.status === "1")
    {
        const data = [
            {
                type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table
                value: "||---",
                style: `text-align:left;`,
                css: {"font-size": "12px"},
            },
            {
                type: 'image',
                path: 'logo.webp', // file path
                position: 'center', // position of image: 'left' | 'center' | 'right'
                width: '50px', // width of image in px; default: auto
                height: '50px', // width of image in px; default: 50 or '50px'
            },
            {
                type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table'
                value: jsonData["0"]["recip"],
                css: {
                    "font-size": "8px",
                    "font-family": "sans-serif",
                    "text-align": "left",
                },
            },
            {
                type: "text", // 'text' | 'barCode' | 'qrCode' | 'image' | 'table
                value: "---||",
                style: `text-align:right;`,
                css: {"font-size": "12px"},
            },
        ];
        const options = {
            preview: false, // Preview in window or print
            width: width, //  width of content body
            margin: "0 0 0 0", // margin of content body
            copies: 1, // Number of copies to print
            printerName: PrinterName, // printerName: string, check it at webContent.getPrinters()
            timeOutPerLine: 400,
            silent: true,
        };


        const d = [...data];

        if (PrinterName && width) {
            PosPrinter.print(d, options)
                    .then(() => {
                    })
                    .catch((error) => {
                        console.error(error);
                    });
        } else {
            alert("Select the printer and the width");
        }
    }
}


ipcRenderer.on('register:bet', (event, bet) => {
    switch (bet) {
        case "bet":
            betreg();
            break;
        case "fclaim":
            fclaim();
            break;
        default:
            break;
    }

});

function quit()
{
    ipcRenderer.send('todo:add', "quit");
}
