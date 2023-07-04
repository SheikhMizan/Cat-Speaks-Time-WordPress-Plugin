# Cat-Speaks-Time-WordPress-Plugin

Cat Speak is a WordPress plugin that adds a fun feature to your website where a cat speaks the current time using text-to-speech.

## Features

- Displays a cat image on your website.
- When the cat image is clicked, it speaks the current time using text-to-speech.
- Supports customization of the voice and language used for speech synthesis.

## Installation

1. Download the plugin ZIP file 
2. In your WordPress admin dashboard, go to "Plugins" > "Add New" and click on the "Upload Plugin" button.
3. Choose the downloaded ZIP file and click "Install Now".
4. Activate the "Cat Speak" plugin.

## Usage

To use the Cat Speak plugin, add the `[cat-time]` shortcode to your post or page content. The cat image with the speech functionality will be displayed.

```shortcode
[cat-time]

## Customization
You can customize the voice and language used for speech synthesis by modifying the plugin code. Open the cat-speak.js file and locate the following line:

javascript

utterance.voiceURI = 'Google UK English Female';

Change the value 'Google UK English Female' to the desired voice URI.


## License
This project is licensed under the MIT License.

## Contributing
Contributions are welcome! If you encounter any issues or have suggestions for improvements, please open an issue or submit a pull request.

## Acknowledgements
The Cat Speak plugin utilizes the responsivevoice JavaScript library for text-to-speech functionality.

Support
For any questions or support requests, please contact the plugin author at me@sheikhmizan.com
