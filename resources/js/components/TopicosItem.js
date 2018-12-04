import React from 'react';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemText from '@material-ui/core/ListItemText';
import Divider from '@material-ui/core/Divider';

const styles = theme => ({
    root: {
        width: '100%',
        maxWidth: '360px',
        backgroundColor: theme.palette.background.paper,
    },
});





function TopicosItem(props) {
    const { topicos } = props;
    /*const listaTopicos = titulo.map((titulo) =>

    );*/

    return (
        <ListItem button divider key={topicos.id} >
            <h5 >{topicos.nombre}</h5>
        </ListItem>
    );
}

TopicosItem.propTypes = {
    classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(TopicosItem);
