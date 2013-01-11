function updatelength(field, output) {
    curr_length = document.getElementById(field).value.length;
    field_mlen = document.getElementById(field).maxLength;
    document.getElementById(output).innerHTML = curr_length+'/'+field_mlen;
    return 1;
}

function check_v_EmplPassword(field, output) {
    EmplPassword_buf_value = document.getElementById(field).value;
    EmplPassword_level = 0;
    if (EmplPassword_buf_value.match(/[a-z]/g)) {
        EmplPassword_level++;
    }
    if (EmplPassword_buf_value.match(/[A-Z]/g)) {
        EmplPassword_level++;
    }
    if (EmplPassword_buf_value.match(/[0-9]/g)) {
        EmplPassword_level++;
    }
    if (EmplPassword_buf_value.length < 5) {
        if(EmplPassword_level >= 1) EmplPassword_level--;
    } else if (EmplPassword_buf_value.length >= 20) {
        EmplPassword_level++;
    }
    output_val = '';
    switch (EmplPassword_level) {
        case 1: output_val='Weak'; break;
        case 2: output_val='Normal'; break;
        case 3: output_val='Strong'; break;
        case 4: output_val='Very strong'; break;
        default: output_val='Very weak'; break;
    }
    if (document.getElementById(output).value != EmplPassword_level) {
        document.getElementById(output).value = EmplPassword_level;
        document.getElementById(output).innerHTML = output_val;
    }
    return 1;
}

function compare_valid(field, field2) {
    fld_val = document.getElementById(field).value;
    fld2_val = document.getElementById(field2).value;
    if (fld_val == fld2_val) {
        update_css_class(field2, 2);
        p_valid_r = 1;
    } else {
        update_css_class(field2, 1);
        p_valid_r = 0;
    }
    return p_valid_r;
}

function check_v_mail(field) {
    fld_value = document.getElementById(field).value;
    is_m_valid = 0;
    if (fld_value.indexOf('@') >= 1) {
        m_valid_dom = fld_value.substr(fld_value.indexOf('@')+1);
        if (m_valid_dom.indexOf('@') == -1) {
            if (m_valid_dom.indexOf('.') >= 1) {
                m_valid_dom_e = m_valid_dom.substr(m_valid_dom.indexOf('.')+1);
                if (m_valid_dom_e.length >= 1) {
                    is_m_valid = 1;
                }
            }
        }
    }
    if (is_m_valid) {
        update_css_class(field, 2);
        m_valid_r = 1;
    } else {
        update_css_class(field, 1);
        m_valid_r = 0;
    }
    return m_valid_r;
}

function valid_length(field) {
    length_df = document.getElementById(field).value.length;
    if (length_df >= 1 && length_df <= document.getElementById(field).maxLength) {
        update_css_class(field, 2);
        ret_len = 1;
    } else {
        update_css_class(field, 1);
        ret_len = 0;
    }
    return ret_len;
}

function update_css_class(field, class_index) {
    if (class_index == 1) {
        class_s = 'wrong';
    } else if (class_index == 2) {
        class_s = 'correct';
    }
    document.getElementById(field).className = class_s;
    return 1;
}

function validate_all(output) {
    t1 = valid_length('EmplUserName');
    t2 = valid_length('EmplPasswordword');
    t3 = compare_valid('EmplPasswordword', 'c_EmplPasswordword');
    t4 = check_v_mail('email');
    t5 = check_v_EmplPassword('EmplPasswordword', 'EmplPassword_result');

    errorlist = '';
    if (! t1) {
        errorlist += 'login is too short/long<br />';
    }
    if (! t2) {
        errorlist += 'EmplPasswordword is too short/long<br />';
    }
    if (! t3) {
        errorlist += 'EmplPasswordwords are not the same<br />';
    }
    if (! t4) {
        errorlist += 'Mail is wrong<br />';
    }
    if (errorlist) {
        document.getElementById(output).innerHTML = errorlist;
        return false;
    }
    return true;
}
