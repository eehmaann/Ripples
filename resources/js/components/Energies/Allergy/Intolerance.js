import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import AllergyText from './AllergyText';
import AllergyEntry from './AllergyEntry';

class Allergy extends Component {
  constructor(props){

    super(props);



       this.state = {
        prognosis: 'Intolerance' ,
        substance:'Type what client is allergic to here',
        effect:'Type what the effect is',
        entry: 'Display Cause',

      };

     this.onSubstanceChange= this.onSubstanceChange.bind(this);
     this.onEffectChange= this.onEffectChange.bind(this);
     this.addIntoleranceHandler= this.addAllergyHandler.bind(this);
  
  }

    addIntoleranceHandler(purpose) {
        this.setState({
           entry: this.state.prognosis + ' to ' +
           this.state.substance + ' leads to ' +
           this.state.effect
        })
    }

  onSubstanceChange(event) {
    event.preventDefault();
    this.setState({substance: event.target.value});
  }

  onEffectChange(event) {
     event.preventDefault();
    this.setState({effect: event.target.value});
  }


  render() {
    return(
      <div>
        <p>{this.state.entry}</p>
        <p>{this.state.prognosis</p>
        <p> {this.state.substance}</p> 
       <AllergyText substanceChange={this.onSubstanceChange}/>
       <p>{this.state.effect}</p>
       <EffectText effectChange={this.onEffectChange}/>
       <AllergyEntry action={this.addIntoleranceHandler} purpose="Form Intolerance"/>
      </div>
    );
  }  
}

export default Intolerance;

if (document.getElementById('test')) {
    ReactDOM.render(<Intolerance />, document.getElementById('test'));
}