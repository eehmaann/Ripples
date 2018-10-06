import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class NoButton extends Component {

  handleClick(){
    alert("NO");
  };

  render() {
    return(
      <button onClick={() =>this.handleClick()}>
        No
      </button>
    );
  }  
}

export default NoButton;