import React, { Component } from 'react';
import ReactDOM from 'react-dom';
//import EmotionGroup from 'EmotionGroup';

export default class EmotionShow extends Component {
 	
 	render() {
    return (
    	<p> This is a test</p>
    );
	}
}


if (document.getElementById('emotion')) {
    ReactDOM.render(<EmotionShow/>, document.getElementById('emotion'));
}