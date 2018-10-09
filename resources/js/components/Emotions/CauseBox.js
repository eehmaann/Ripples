import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class CauseBox extends Component {
  constructor(props){
    super();
  } 
  render(){
    return(
      <div>
        <input type="text" onChange={this.props.causeChange}/>
      </div>
    );
  }
}

export default CauseBox;