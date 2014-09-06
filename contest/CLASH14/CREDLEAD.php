<?php require("../../includes/header.php"); ?><h1>Leader Board</h1><div class="content">
<p> </p>
<p> The <a href="http://nth.credenz.info">Network Treasure Hunt</a> (NTH) is an online treasure hunt. There are hundreds of participants, decrypting messages and taking the help of clues to solve riddles. Participants can go to the next level only after solving the question on their current level.</p>
<p>The NTH team had logs of participants who solved a level and moved to the next level, ordered by increasing time of submission from the start of the contest.<br />
The NTH Team decided to pick winners for every level. The first person who reached a level was the winner of that level.<br />
Given the chronological ordering of correct answers, find the winners of each level.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains an integer <b>N</b>, representing the number of entries in the logs.<br />
<b>N</b> lines follow.<br />
Each line contains a string, representing the <b>username</b> of a player who has moved one level up.</p>
<p>Note: The list is sorted by the time at which the users submitted a right answer.</p>
<h3>Output</h3>
<p>
Print the username of winners of each level, in increasing order of level number.<br />
Each line should contain an integer representing the <b>level</b> followed by a string representing the <b>username</b> of the winner of that level.<br />
The <b>level</b> number and <b>username</b> should be separated by a space</p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b> <br />
<b>1</b> ≤ <b>Length of username of participant</b> ≤ <b>50</b> </p>
<p> </p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6
Ankit
Akshay
Ankit
Tarun
Akshay
Akshay

<b>Output:</b>
1 Ankit
2 Ankit
3 Akshay</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDLEAD" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>