<?php require("../../includes/header.php"); ?><h1>Enter the Matrix</h1><div class="content">
<p>Its the 22nd century and the terror of Codezilla is at its height. Codezilla is the most evil and dangerous hacker that ever existed. He has broken all systems of governance and the world has descended into anarchy. Eon, a young hacker, is fed up with the situation and has decided to put an end to Codezilla.
</p>
<p>
Eon meets a mysterious man called Cypher who is on the same mission. He tells Eon that to fight against Codezilla first he needs to get out of the real world and enter the Matrix. For this he needs to take some pills.
</p>
<p>Cypher gives a set of pills to Eon. There are three types of pills: Blue,Red and Green. Eon can select any number of consecutive pills but he must take atleast one red pill, one blue pill and one green pill to enter the matrix. As eating more pills can be harmful, help Eon select the minimum number of pills.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the next T lines contains a string depicting the set of pills. Each character of the string is 'B', 'R' or 'G' standing for blue, red and green pills respectively. </p>
<h3>Output</h3>
<p>For every test case, print in a single line the minimum number of consecutive pills that Eon should take so that he gets atleast one pill of each colour.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>3</b> ≤ <b>Length of string</b> ≤ <b>100000</b></li>
<li>The input string will contain atleast one each of 'B', 'R' and 'G'.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
BBRG
RGGGBBR

<b>Output:</b>
3
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Eon selects the pills from 2 to 4, so he takes 3 pills.</p>
<p><b>Example case 2.</b> Eon can select 5 pills from 1 to 5 or he can select 4 pills from 4 to 7. So the answer is 4.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>