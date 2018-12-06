/**
 * Created by amihealthmel on 11/29/18.
 */
import React, {Component,Fragment } from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import MenuAppBar from './MenuAppBar'
import SignIn from './SignIn'
import Index from './Index'
import Grid from '@material-ui/core/Grid'
import Fab from '@material-ui/core/Fab'
import AddIcon from '@material-ui/icons/Add'
import MediaCard from './Congresos/CardCongreso'
import FloatingActionButtons  from './ui-adds/BtnFab'
import axios from 'axios'
import Paper from '@material-ui/core/Paper'
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import CssBaseline from '@material-ui/core/CssBaseline';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import IconButton from '@material-ui/core/IconButton';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemText from '@material-ui/core/ListItemText';
import ListSubheader from '@material-ui/core/ListSubheader';
import Avatar from '@material-ui/core/Avatar';
import MenuIcon from '@material-ui/icons/Menu';
import SearchIcon from '@material-ui/icons/Search';
import MoreIcon from '@material-ui/icons/MoreVert';
import BottomAppBar from './Congresos/CongresoComponet';



class Congresos extends Component {
    constructor(props){
        super(props);
        this.state = {
            data:[]
        }


    }

    componentDidMount(){


        axios.get('congresos').then((response) => {

            this.setState({
                data:response.data
            });
        });


    }


    render(){

        const {data} = this.state;
        const {classes} = this.props;


        //console.log(this.props);

        return (

            <div style={{height:'400px'}}>
                <div >
                    <React.Fragment>
                        <CssBaseline />
                        <Paper square style={{paddingBottom: 50,}}>
                            <Typography style={{padding:'1em'}} variant="h5" gutterBottom>
                                Lista de congresos
                            </Typography>

                            <Grid
                                container
                                direction="row"
                                justify="center"
                                alignItems="center"
                                spacing={16}

                            >
                                {data.map((congreso) => {

                                    return (
                                        <Fragment key={congreso.id} >
                                            <Grid key={congreso.id} item>
                                                <MediaCard  congreso={congreso}/>
                                            </Grid>

                                        </Fragment>
                                    );

                                })}

                            </Grid>

                        </Paper>
                        <AppBar position="sticky" color="primary" style={{top: 'auto',
                            bottom: 0, height:0}}>
                            <Toolbar  style={{alignItems: 'center',
                                justifyContent: 'space-between',}}>
                                <Fab color="secondary" aria-label="Add" style={{position: 'absolute',
                                    zIndex: 1,
                                    top: -30,
                                    left: 0,
                                    right: 0,
                                    margin: '0 auto',}}>
                                    <AddIcon />
                                </Fab>
                            </Toolbar>
                        </AppBar>
                    </React.Fragment>
                </div>
            </div>


        )
    }

}


ReactDOM.render(<Congresos/>, document.getElementById('congresos'));