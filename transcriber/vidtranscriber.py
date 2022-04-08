import speech_recognition as sr
import moviepy.editor as mp

def transcribe_video():
    filepath = "AuntieSophie.mp4" 
    #input("Enter video file path here:\n")
    if '\\' in filepath:
        filepath.replace('\\', '\\'*2)
    print("filepath: " + filepath)
    #Converting video to audio format

    clip = mp.VideoFileClip(filepath) #Takes video file 
    #extensions: mp4 and sublets like mov and others

    clip.audio.write_audiofile(r"audioconvert.wav") #reads video file in audio format. .wav is best for speech recognition

    #Initialize Speech Recognition
    r = sr.Recognizer()
    audio = sr.AudioFile("audioconvert.wav")

    with audio as source:
        r.adjust_for_ambient_noise(source, 1)
        audio_file = r.record(source)
        result = r.recognize_google(audio_file)

    #Exporting results
    textfile = input('transcript')
    with open(textfile + '.txt','w') as file:
        file.write("Transcription complete:\n")
        file.write(result)
    print("Transcription complete")

## function to handle the audio

def transcribe_audio():
    filepath = "audioconvert.wav" #input("Enter audio file path here (filetype = .mp3):\n")
    if '\\' in filepath:
        filepath.replace('\\', '\\'*2)
    print("filepath: " + filepath)
    clip = mp.AudioFileClip(filepath)
    clip.write_audiofile(r"converted2.wav")
    
    #Initialize Speech Recognition
    r = sr.Recognizer()
    audio = sr.AudioFile("converted2.wav")

    with audio as source:
        r.adjust_for_ambient_noise(source,1)
        audio_file = r.record(source)
        result = r.recognize_google(audio_file)

    #Exporting results
    textfile = input('Enter audio input file name: ')
    with open(textfile + '.txt','w') as file:
        file.write("Transcription begins \n")
        file.write(result)
    print("Transcription complete")


def main():
    print("Transcription in progress")
    transcribe_video()
    transcribe_audio()


main()