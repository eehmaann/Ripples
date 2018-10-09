import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class TrappedEmotionSourceButton extends Component {
  constructor(props) {
    super();
  }
  render() {
    return(
      <button onClick={ () => { this.props.action(this.props.trappedSource) } }>
        {this.props.trappedSource}
      </button>
    );
  }  
}

export default TrappedEmotionSourceButton;