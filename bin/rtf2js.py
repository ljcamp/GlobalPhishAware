# -*- coding: utf-8 -*-
#!/usr/bin/env python
#===============================================================================
#
#         FILE: rtf2js.py
#
#        USAGE: ./rtf2js.py
#
#  DESCRIPTION:
#
#      OPTIONS: ---
# REQUIREMENTS: ---
#         BUGS: ---
#        NOTES: ---
#       AUTHOR: DongInn Kim (kdi) dikim@indiana.edu
# ORGANIZATION: School of Informatics and Computing
#      VERSION: 1.0
#      CREATED: 04/09/2018 12:31:38
# LAST UPDATED: $Date$
#     REVISION: $Rev:$
#===============================================================================


def rtf2js(rtfFile, jsFile, outFile, country):
    assert len(country) == 2, "The length of the country must be 2 letters only (country 2 letter code)"
    final_str = country+'_Dict = {\n'
    list_of_maps = []
    tmp_str = ''
    if country == 'AU':
        with open(rtfFile, 'r') as src:
            for line in src:
                if line.replace(' ','').startswith('//'):
                    continue
                tmp_str += line.replace('\n','').replace('\xe2\x80\x98',"'").replace('\xe2\x80\x99',"'")
    elif country == 'ZA':
        with open(rtfFile, 'r') as src:
            for line in src:
                if line.replace(' ', '').startswith('//'):
                    if '_bitmap' in line:
                        name = line[2:].split('_bitmap')[0]
                        tmp_str += "'" + name + "':"
                    else:
                        pass
                elif '</map>' in line:
                    tmp_str += line.replace('\n', '').replace('\xe2\x80\x98', "'").replace('\xe2\x80\x99', "'")
    elif country == 'GB':
        with open(rtfFile, 'r') as src:
            for line in src:
                if line.replace(' ', '').startswith('//'):
                    continue
                tmp_str += line.replace('\n', '').replace('\xe2\x80\x98', "'").replace('\xe2\x80\x99', "'")
    else:
        raise ValueError('The country code is not defined, you should implement it first.')

    quote_indices = [q for q,r in enumerate(tmp_str) if r =="'"]
    for ii in range (2,len(quote_indices),2):
        list_of_maps.append(tmp_str[quote_indices[ii-2]:quote_indices[ii]])
    for each_map in list_of_maps:
        name = each_map.split(':')[0].replace("'", '')
        circle_coords=  each_map.split('circle" coords="')[1].split('" />')[0]
        circle_part_str ='<area target="" alt="Back_adcash_control" title="Back_adcash_control" href="javascript:advanceExperiment(\\\'back\\\')" coords="' + circle_coords +'" shape="circle">'
        if 'rect" coords="' in each_map:
            rect_coords = each_map.split('rect" coords="')[1].split('" />')[0]
            second_part = '<area target="" alt="Login_adcash_control" title="Login_adcash_control" href="javascript:advanceExperiment(\\\'login\\\')" coords="' + rect_coords + '" shape="rect"></map>\',\n'
        elif 'poly" coords="' in each_map:
            poly_coords = each_map.split('poly" coords="')[1].split('" />')[0]
            second_part = '<area target="" alt="Login_adcash_control" title="Login_adcash_control" href="javascript:advanceExperiment(\\\'login\\\')" coords="' + poly_coords + '" shape="poly"></map>\',\n'
        final_str += "'" + name + "'"  + ':\'<map id="scaleMap0" name="'+ name + '">' + circle_part_str + second_part


    final_str = final_str[:-2] + '};\n\n'
    with open(jsFile, 'r') as trg:
        target = trg.read()

    target = final_str + target
    with open(outFile, 'w') as trg:
        trg.write(target)


if __name__ == '__main__':
    rtf2js('./southafrica','./tmp.js','./output.js','ZA')