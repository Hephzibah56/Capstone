import os
from google.cloud import speech

os.environ['GOOGLE_APPLICATION_CREDENTIALS'] = 'transcribeproject.json'
speech_client = speech.SpeechClient()


media_uri = 'gs://speechtextmedia/scontest.wav'
long_audi_wav = speech.RecognitionAudio(uri=media_uri)

config_wav_enhanced = speech.RecognitionConfig(
    sample_rate_hertz=48000,
    enable_automatic_punctuation=True,
    language_code='en-US',
    use_enhanced=True,
    model='audio'
)

operation = speech_client.long_running_recognize(
    config=config_wav_enhanced,
    audio=long_audi_wav
)

response = operation.result(timeout=90)
print(response)

for result in response.results: 
    print(result.alternatives[0].transcript)
    print(result.alternatives[0].confidence)
    print()
