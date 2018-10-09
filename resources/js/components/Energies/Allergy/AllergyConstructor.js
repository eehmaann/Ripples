import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import AllergyButton from './AllergyButton';
import AllergyText from './AllergyText';
import AllergyEntry from './AllergyEntry';

class Allergy extends Component {
  constructor(props){

    super(props);



       this.state = {
        allergyType:'Idea ',
        prognosis: 'Allergy' ,
        substance:'Type what client is allergic to here',
        entry: 'NOthing ',

      };

     this.handler = this.handler.bind(this);
     this.onSubstanceChange= this.onSubstanceChange.bind(this);
     this.addAllergyHandler= this.addAllergyHandler.bind(this);
  
  }

    handler(allergy) {
        this.setState({
           allergyType: allergy
        })
    }

    addAllergyHandler(monkey) {
        this.setState({
           entry: this.state.allergyType + ' ' +
           this.state.prognosis + ' to ' +
           this.state.entry
        })
    }

  onSubstanceChange(event) {
    event.preventDefault();
    this.setState({substance: event.target.value});
  }

  render() {
    return(
      <div>
        <p>{this.state.allergyType} {this.state.prognosis}</p>
        <p> {this.state.substance}</p> 
        <p>{this.state.entry}</p>
        <AllergyButton  action={this.handler} allergy="Physical" />
        <AllergyButton  action={this.handler} allergy="Idea" />
       <AllergyText substanceChange={this.onSubstanceChange}/>
       <AllergyEntry action={this.addAllergyHandler} monkey="Form Allergy"/>
      </div>
    );
  }  
}

export default AllergyConstructor;
