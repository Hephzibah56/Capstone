var i=0;
		function speechToTextConversion()
			{			
				var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition

				var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent

				var recognition = new SpeechRecognition();
			
				recognition.continuous = true;
				recognition.lang = 'en-IN';
				recognition.interimResults = true;
				recognition.maxAlternatives = 1;

				var diagnostic = document.getElementById('text');
			
                var i=0;
                var j=0;
				document.getElementById("playButton").onclick = function() {
				    if(i==0)
				    {
				        document.getElementById("playButton").src="record-button-thumb.png";
				        recognition.start();
				        i=1;
				    }
				    else
				    {
				         document.getElementById("playButton").src="mic.png";
				         recognition.stop();
				         i=0;
				    }
				}
				recognition.onresult = function(event) {
				  var last = event.results.length - 1;
				  var convertedText = event.results[last][0].transcript;
				  diagnostic.value = convertedText;
				  console.log('Confidence: ' + event.results[0][0].confidence);
				}
				
				recognition.onnomatch = function(event) {
				  diagnostic.value = 'I didnt recognise that.';
				}
				recognition.onerror = function(event) {
				  diagnostic.value = 'Error occurred in recognition: ' + event.error;
				}
			};


			function downloadFile(filename, content) {
				const element = document.createElement('a');
				
				//A blob is a data type that can store binary data
				// "type" is a MIME type
				// It can have a different value, based on a file you want to save
				const blob = new Blob([content], { type: 'plain/text' });
			  
				//createObjectURL() static method creates a DOMString containing a URL representing the object given in the parameter.
				const fileUrl = URL.createObjectURL(blob);
				
				//setAttribute() Sets the value of an attribute on the specified element.
				element.setAttribute('href', fileUrl); //file location
				element.setAttribute('download', filename); // file name
				element.style.display = 'none';
				
				//use appendChild() method to move an element from one element to another
				document.body.appendChild(element);
				element.click();
				
				//The removeChild() method of the Node interface removes a child node from the DOM and returns the removed node
				document.body.removeChild(element);
			  };
			  
			window.onload = () => {
				document.getElementById('download').
				addEventListener('click', e => {
				   //The value of the file name input box
				  const filename = document.getElementById('filename').value;
				  //The value of what has been input in the textarea
				  const content = document.getElementById('text').value;
				  // The && (logical AND) operator indicates whether both operands are true. If both operands have nonzero values, the result has the value 1 . Otherwise, the result has the value 0.
				if (filename && content) {
					downloadFile(filename, content);
				  }
				});
			  };