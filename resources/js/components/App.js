import React, { Component } from 'react'
import ReactDom from 'react-dom'
import { BrowserRouter, Route, Switch} from 'react-router-dom'
import Header from "./Header";
import NewProject from "./NewProject";
import ProjectsList from "./ProjectList";



class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <div>
                   <Header/>
                    <Switch>
                        <Route exact path='/' component={ProjectsList} />
                        <Route path='/create' component={NewProject} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}

ReactDom.render(<App/>, document.getElementById('app'));
