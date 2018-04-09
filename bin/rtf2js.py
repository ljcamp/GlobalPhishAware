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
# import re
#
final_str = 'AU_Dict = {\n'
list_of_maps = []
tmp_str = ''
with open('bitmapsAU.txt','r') as src:
    for line in src:
        if line.replace(' ','').startswith('//'):
            continue
        tmp_str += line.replace('\n','').replace('\xe2\x80\x98',"'").replace('\xe2\x80\x99',"'")
quote_indices = [q for q,r in enumerate(tmp_str) if r =="'"]
for ii in range (2,len(quote_indices),2):
    list_of_maps.append(tmp_str[quote_indices[ii-2]:quote_indices[ii]])
for each_map in list_of_maps:
    circle_coords=  each_map.split('coords="')[1].split('" />')[0]
    rect_coords = each_map.split('coords="')[2].split('" />')[0]
    name = each_map.split(':')[0].replace("'",'')
    final_str += "'" + name + "'"  + ':\'<map id="scaleMap0" name="'+ name + '">' +\
    '<area target="" alt="Back_adcash_control" title="Back_adcash_control" href="javascript:advanceExperiment(\\\'back\\\')" coords="' + circle_coords +'" shape="circle">'+\
    '<area target="" alt="Login_adcash_control" title="Login_adcash_control" href="javascript:advanceExperiment(\\\'login\\\')" coords="' + rect_coords + '" shape="rect"></map>\',\n'

final_str = final_str[:-2] + '};\n\n'
with open('tmp2.js','r') as trg:
    target = trg.read()

target = final_str + target
with open('tmp2.js','w') as trg:
    trg.write(target)


#########################################

final_str = 'ZA_Dict = {\n'
list_of_maps = []
tmp_str = ''
with open('southafrica','r') as src:
    for line in src:
        if line.replace(' ','').startswith('//'):
            if '_bitmap' in line:
                name = line[2:].split('_bitmap')[0]
                tmp_str += "'" + name + "':"
            else:
                pass
        elif '</map>' in line:
            tmp_str += line.replace('\n', '').replace('\xe2\x80\x98', "'").replace('\xe2\x80\x99',"'")

quote_indices = [q for q,r in enumerate(tmp_str) if r =="'"]
for ii in range (2,len(quote_indices),2):
    list_of_maps.append(tmp_str[quote_indices[ii-2]:quote_indices[ii]])
for each_map in list_of_maps:
    circle_coords=  each_map.split('circle" coords="')[1].split('" />')[0]
    rect_coords = each_map.split('rect" coords="')[1].split('" />')[0]

    name = each_map.split(':')[0].replace("'",'')
    final_str += "'" + name + "'"  + ':\'<map id="scaleMap0" name="'+ name + '">' +\
    '<area target="" alt="Back_adcash_control" title="Back_adcash_control" href="javascript:advanceExperiment(\\\'back\\\')" coords="' + circle_coords +'" shape="circle">'+\
    '<area target="" alt="Login_adcash_control" title="Login_adcash_control" href="javascript:advanceExperiment(\\\'login\\\')" coords="' + rect_coords + '" shape="rect"></map>\',\n'
    # break

final_str = final_str[:-2] + '};\n\n'
with open('tmp2.js','r') as trg:
    target = trg.read()

target = final_str + target
with open('tmp2.js','w') as trg:
    trg.write(target)


##############################################################

final_str = 'GB_Dict = {\n'
list_of_maps = []
tmp_str = ''

with open('uk','r') as src:
    for line in src:
        if line.replace(' ','').startswith('//'):
            continue
        tmp_str += line.replace('\n','').replace('\xe2\x80\x98',"'").replace('\xe2\x80\x99',"'")

quote_indices = [q for q,r in enumerate(tmp_str) if r =="'"]
for ii in range (2,len(quote_indices),2):
    list_of_maps.append(tmp_str[quote_indices[ii-2]:quote_indices[ii]])
for each_map in list_of_maps:
    circle_coords=  each_map.split('circle" coords="')[1].split('" />')[0]
    rect_coords = each_map.split('rect" coords="')[1].split('" />')[0]

    name = each_map.split(':')[0].replace("'",'')
    final_str += "'" + name + "'"  + ':\'<map id="scaleMap0" name="'+ name + '">' +\
    '<area target="" alt="Back_adcash_control" title="Back_adcash_control" href="javascript:advanceExperiment(\\\'back\\\')" coords="' + circle_coords +'" shape="circle">'+\
    '<area target="" alt="Login_adcash_control" title="Login_adcash_control" href="javascript:advanceExperiment(\\\'login\\\')" coords="' + rect_coords + '" shape="rect"></map>\',\n'

final_str = final_str[:-2] + '};\n\n'
with open('tmp2.js','r') as trg:
    target = trg.read()

target = final_str + target
with open('tmp2.js','w') as trg:
    trg.write(target)


