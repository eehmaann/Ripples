import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import CauseBox from './CauseBox'
import IntegerBox from './IntegerBox'
import Submit from '../SubmitButton'


class SelfLifeDetail extends Component {
  constructor(props){

    super(props);

       this.state = {
        cause'',
        age '',

      };

     this.onEventCauseChange= this.onEventCauseChange.bind(this);
     this.onAgeChange= this.onAgeChange.bind(this);
  
  }
    onAgeChange(event) {
      event.preventDefault();
      this.setState({age: event.target.value});
    }

  onEventCauseChange(event) {
    event.preventDefault();
    this.setState({cause: event.target.value});
  }


  render() {
    return(
      <div>
        <p>Emotional Resonance of {this.state.emotion} started at age {this.state.age}
         when {this.state.cause} happened</p> 
        <p> Age: <IntegerBox numberChange={this.onAgeChange}/>
        <p> Event: <CauseBox causeChange={this.onEventCauseChange}/>
      </div>
    );
  }  
}

export default SelfLifeDetail;