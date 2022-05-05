from fastapi import BackgroundTasks, FastAPI
from pygtail import Pygtail

import utility

app = FastAPI()

@app.get("/")
async def root(background_tasks: BackgroundTasks):
    background_tasks.add_task(utility.main)
    return "transcription service initiated"
    

@app.get("/speak")
async def speak():
    utility.main
    # transcript_arr = []
    transcript_dict = {}

    for line in Pygtail("transcribed.txt"):
        line = line.split(":")
        # # array
        # transcript_arr.append(line[1])
        #dict
        transcript_dict[line[0]] = line[1]
    return transcript_dict
