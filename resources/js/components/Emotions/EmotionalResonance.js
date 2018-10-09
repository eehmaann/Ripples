import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import CauseBox from './CauseBox'
import EmotionRow from './EmotionRow'
import IntegerBox from './IntegerBox'
import Submit from '../SubmitButton'


class EmotionalResonance extends Component {
  constructor(props){

    super(props);



       this.state = {
        emotion:'',
        cause'',
        age '',
        trappedRow:'Yes',
        resonanceDetails'',

      };

     this.addEmotionHandler= this.addEmotionChange.bind(this);
     this.onEventCauseChange= this.onEventCauseChange.bind(this);
     this.onAgeChange= this.onAgeChange.bind(this);
     this.submitHandler= this.submitHandler.bind(this);
  
  }

    addEmotionHandler(feel) {
        this.setState({
           emotion:feel
        })
    }

    onAgeChange(event) {
      event.preventDefault();
      this.setState({age: event.target.value});
    }

  onEventCauseChange(event) {
    event.preventDefault();
    this.setState({cause: event.target.value});
  }

  submitHandler() {
        this.setState({
           resonanceDetails: "Emotional Resonance of " 
           + {this.state.emotion} 
           + " started at age "{this.state.age}
           + " when " {this.state.cause} + " happened"
        })
    }

  render() {
    return(
      <div>
        <p>Emotional Resonance of {this.state.emotion} started at age {this.state.age}
         when {this.state.cause} happened</p> 
        <p> Age: <IntegerBox numberChange={this.onAgeChange}/>
        <p> Event: <CauseBox causeChange={this.onEventCauseChange}/>
        <p> Select Emotion </p>
        <EmotionRow  action={this.addEmotionHandler} feel="feel" row=this.state.trappedRow/>
      </div>
    );
  }  
}

export default EmotionalResonance;