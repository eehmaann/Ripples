import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NoButton from './NoButton';
import YesButton from './YesButton';

class UnderlyingChoiceDisplay extends Component {

  render() {
    return(
    	<div>
    		<p>Is there an underlying cause</p>
    		<NoButton/> <YesButton/>
    	</div>
    );
  }
}

export default UnderlyingChoiceDisplay;
