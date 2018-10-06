import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import AllergyButton from './AllergyButton';


class Allergy extends Component {
  constructor(props){

    super(props);



       this.state = {
        allergyType:'Idea ',
        prognosis: 'Allergy',
      };

     this.handler = this.handler.bind(this);
  
  }

    handler() {
        this.setState({
           allergyType: this.props.allergy
        })
    }

  render() {
    return(
      <div>
        <p>{this.state.allergyType} {this.state.prognosis}</p>
        <AllergyButton  action={this.handler} allergy="Physical" />
        <AllergyButton  action={this.handler} allergy="Idea" />
      </div>
    );
  }  
}

export default Allergy;

if (document.getElementById('test')) {
    ReactDOM.render(<Allergy />, document.getElementById('test'));
}