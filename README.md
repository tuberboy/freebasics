# Freebasics
free basics by facebook - free net api - just for educational purpose!

# Supported ISP's (BD)
* Robi (Tested)
* Airtel (Not Tested)
* Banglalink (Not Tested)
* Grameenphone (Not Tested)
* Others (Not Tested)

# Usage:
* On Termux
  
  if haven't `Termux` installed then download from below
  
  [Direct Link (101MB)](https://f-droid.org/repo/com.termux_1000.apk)
  
  Or
  
  [Check/Download Latest Version](https://f-droid.org/en/packages/com.termux/)

After download install it or if you have installed it then run commands
```
pkg update && pkg upgrade -y
```
if not works above commands then
```
apt update && apt upgrade -y
```
now install `git`, run commands
```
pkg install git -y
```
and now clone `freebasics` repository, run commands
```
git clone https://github.com/tuberboy/freebasics.git
```
access to `freebasics` directory, run commands
```
cd freebasics
```
finally start download by running commands
```
./dl <file-url>
```
`<file-url>` is just for example, so collect targeted download file (like: mp3, mp4, mkv, pdf, apk etc etc) from online and run commands, example: `./dl https://example.com/file.mp3`

file will start download by chunks step. after finished all steps, all chunks files will merge in single file, run `ls` command to see merged file, then move to sdcard, just run commands one time for storage permission
```
termux-setup-storage
```
click `allow` for accept permission, and then move merged file to sdcard by running commands
```
mv <file-name> /sdcard/
```
`<file-name>` is an example, use merged file name, like `some-music-title.mp3` which you can see after `ls` command, again example: `mv some-music-title.mp3 /sdcard/` and then go to file manager and play/run that file. That's it.

* On NeoTerm

  Still in development mode and will release soon then update this usages information.

* On WSL Ubuntu (Windows 10/11)

  Same as termux, just use `apt` instead of `pkg` and use `./dl-wsl` instead of `./dl`

* On Any Ubuntu/Linux Server

  Same as termux, just use `apt` instead of `pkg` and use `./dl-us` instead of `./dl`

Will upload source codes and update all types of information and video tutorials very soon...

Happily Download! Good Luck!!!
