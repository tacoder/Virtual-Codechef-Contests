<?php require("../../includes/header.php"); ?><h1>The Empire Strikes Back</h1><div class="content">

<p>You are a young spy in the army of the Jedi, posted on the outer rim of the Tatooine. You learn that Darth Vader’s army is on the way to attack the Planet. You want to save Tatooine and you need help of the Jedi Council to defeat the army of Darth Vader. To seek Jedi help you have to inform the Jedi Council sitting at the Jedi Temple which is very far from where you are.</p>
<p>You have a pod with you which runs on electricity and you would like to use it to travel to the Jedi Temple. But the battery of your pod lasts for only a fixed amount of time, <b>C</b>. There are many service stations on your way from the outer rim to the Jedi Temple and luckily for you, some of these allow you to recharge your pod’s battery. </p>
<p>You are in a hurry and want to reach the Jedi Temple in as little time as possible. If you are late, then it might be impossible to save the peaceful planet of Tatooine from the dark forces of Darth Vader’s army. Given the time needed to travel between the service stations, you are asked to output the minimum time in which you would be able to reach the Jedi Temple.</p>
<h3>Input</h3>
<p>The first line of each input contains four space separated integers, <b>N M P C</b> where</p>
<ul>
<li><b>N</b>: The number of service stations including <b>0</b> for the starting point and <b>N-1</b> as the location of the Jedi Temple.</li>
<li><b>M</b>: The number of 1-length paths existing between pairs of <b>N</b> service stations</li>
<li><b>P</b>: The number of service stations which allow you to recharge your battery</li>
<li><b>C</b>: The maximum time for which your battery runs, after you had charged it completely</li>
</ul>
<p><br/></br/></p>
<p>The next line contains <b>P</b> space separated integers denoting the service stations which allow you to recharge.<br/></br/></p>
<p>This is followed by M lines, each containing three space separated numbers <b>X Y T</b><br />
where <b>T</b> is the time required to travel between <b>X</b> and <b>Y</b><br/></br/></p>
<p>Assume that the initial charge in the pod is 0 and it takes negligible time to recharge your battery at the service stations (After all, being in Jedi army has its perks ;) ).</p>
<h3>Output</h3>
<p>Output a single integer <b>t</b> which is the time required to travel from your initial position to the Jedi Temple. If it is not possible for you to reach the Jedi temple, print -1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>min(n*(n-1)/2, 5*10<sup>4</sup>)</b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10<sup>7</sup></b></li>
<li><b>0</b> ≤ <b>X</b> ≤ <b>N-1</b></li>
<li><b>0</b> ≤ <b>Y</b> ≤ <b>N-1</b></li>
<li><b>0</b> ≤ <b>T</b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6 5 2 250
0 4
0 1 200
1 2 30
2 3 10
3 4 10
2 5 230

<b>Output:</b>
500
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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