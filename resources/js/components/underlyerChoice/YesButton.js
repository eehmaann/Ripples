import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class YesButton extends Component {

    clickHandler() {
      alert("Yes");
  }
  render() {
    return(
      <button onClick={() =>this.clickHandler()}>
        Yes
      </button>
    );
  }
  


}

export default YesButton;