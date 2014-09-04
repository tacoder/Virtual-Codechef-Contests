<?php require("../../includes/header.php"); ?><h1>Floor Confusion</h1><div class="content">
<p>Five of the faculty members of IIIT-Delhi Prof. A, Prof. B, Prof. C, Prof. D and Prof. E have their rooms on different floors of the Academic Building, which has five floors.<br /><br />
A week student X has been called by these five professors to discuss his declining performance. But he, having weak memory, has forgotten on which floors are rooms of ALL the respective faculty members located. However, he remembers some information using which it can be figured out on which floors are their rooms located. Can you help him out with it?<br /><br />
You are provided with specifications pertaining to each professor and you are supposed to find out the exact floor on which their room is.</p>
<h3>Input</h3>
<p>The first lines contains a number “T” specifying the number of test cases. (1 ≤ T ≤ 20)<br />
<br /><br />Each test case will be of five lines, each line will provide certain specifications about where the person lives. <b>The first line will contain data for Prof. A, second for Prof. B and so on.</b></p>
<p><br /><br />The following abbreviations are used for the input :</p>
<p><br /><br />A/B/C/D/E : Professor's room is on an ADJACENT floor to that of A/B/C/D/E<br />
<br />NA/NB/NC/ND/NE : Professor's room is not on an adjacent floor to that of A/B/C/D/E.<br />
<br />+A/+B/+C/+D/+E : Professor's room is on a  floor higher than of A/B/C/D/E.<br />
<br />-A/-B/-C/-D/-E : Professor's room is on a floor lower than of A/B/C/D/E.<br />
<br />1/2/3/4/5 : Professor's room is on that specific floor.<br />
<br />N1/N2/N3/N4/N5 : Professor's room is NOT on that specific floor.</p>
<p><br /><br />Each line would contain a combination of the above mentioned abbreviations, each separated by a space.</p>
<p><b><br />Note: “Adjacent” means that they have rooms on consecutive floors, for example : 2,3 or 4,3 etc.<br />
“Higher” or “Lower” does not ONLY mean on a floor which is one more or one less than the one specified. “Higher” simply means that professor has a room on ANY floor which is higher than the one specified.</b></p>
<h3>Output</h3>
<p>For each test case, the output must be the names of the Professors in the order of floors on which they are residing, starting from 1st floor. The alphabets must be printed in one line, without any space in between.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
NC N5 N1
N1
N5
+C
NA
NC
1
+B -A NA
E
N2 N4 D

<b>Output:</b>
CBADE
BCEDA

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon_13">procon_13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>