import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import TopicosItem from './TopicosItem'
import List from '@material-ui/core/List';

import PropTypes from 'prop-types';
import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';


import GridList from '@material-ui/core/GridList';
import GridListTile from '@material-ui/core/GridListTile';
import ListSubheader from '@material-ui/core/ListSubheader';


export default class Topicos extends Component {
    constructor(props) {

        super(props);

        this.state = {
            topicos: [],
        }

        this.renderTopicos=this.renderTopicos.bind(this);
    }

    componentDidMount(){
        axios.get('http://127.0.0.1:8000/api/topicos')
            .then(response => {
                this.setState({ topicos: response.data });
            })
            .catch(function (error) {
                console.log(error);
            })
    }

    renderTopicos(){

        return(
            <Paper elevation={1}>
                <Typography variant="h5" component="h3">
                    Topicos:
                </Typography>


                    <GridList cellHeight={'auto'} style={{
                        display: 'flex',
                        flexWrap: 'wrap',
                        justifyContent: 'space-around',
                        overflow: 'hidden',
                        backgroundColor: 'white', }}>

                        {this.state.topicos.map(topico => (
                            <GridListTile key={topico.id}>
                                <TopicosItem topicos={topico}/>
                            </GridListTile>
                        ))}
                    </GridList>




            </Paper>
        );
    }

    render() {
        return (
            <div>
                {this.renderTopicos()}

            </div>
        )
    }
}

if (document.getElementById('topicos')) {
    ReactDOM.render(<Topicos />, document.getElementById('topicos'));
}