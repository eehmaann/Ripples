import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import IntegerBox from './IntegerBox';


class EmotionalResonance extends Component {
  constructor(props){

    super(props);

       this.state = {
        born:'',
        died:'',
        life:'',
        death:'',

      };

     this.onEventCauseChange= this.onEventCauseChange.bind(this);
     this.onAgeChange= this.onAgeChange.bind(this);
  
  }
    onBornChange(event) {
      event.preventDefault();
      this.setState({born: event.target.value});
    }

    onDiedChange(event) {
      event.preventDefault();
      this.setState({died: event.target.value});
    }

    onLifeChange(event) {
      event.preventDefault();
      this.setState({life: event.target.value});
    }

    onDeathChange(event) {
      event.preventDefault();
      this.setState({death: event.target.value});
    }




  render() {
    return(
      <div>
       <p>When was Past Life Born? <IntegerBox numberChange={this.onBornChange}/></p>
       <p> When did the person Die? <IntegerBox numberChange={this.onDiedChange}/></p>
       <p> What did the person do during life</p>
      <textarea value={this.state.value} onChange=onLifeChange} /> 
      <p> How did the person die? </p>
      <textarea value={this.state.value} onChange=onLifeChange} /> 
      </div>
    );
  }  
}

export default SelfLifeDetail;