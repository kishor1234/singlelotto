let {remote, ipcRenderer} = require("electron");
// console.log(process.versions.electron);
const os = require('os');



const {PosPrinter} = remote.require("electron-pos-printer");
// const {PosPrinter} = require("electron-pos-printer"); //dont work in production (??)


function onload() {
    document.getElementById('device').value = os.hostname()
    var uname = localStorage.getItem("userid");
    if (uname) {
        document.getElementById('uname').value = uname;
    }


}
function quit()
{
    ipcRenderer.send('todo:add', "quit");
}
