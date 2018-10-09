import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class SubmitButton extends Component {
  constructor(props) {
    super();
  }
  render() {
    return(
      <button onClick={ () => { this.props.action(this.props.submit) } }>
        {this.props.submit}
      </button>
    );
  }  
}

export default SubmitButton;