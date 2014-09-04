<?php require("../../includes/header.php"); ?><h1>Winter is coming</h1><div class="content">

<p> It is a very bad time in the North. Lord Eddard Stark has been killed, the castle has been destroyed and Lady Catelyn is not in the kingdom. To add to the difficulties, <i>“Winter is Coming”</i>. The kingdom of North is composed of houses and roads connecting these houses. </p>
<p> Winters in the North are very harsh and it becomes almost impossible to leave your house. So, this time, the King in the North has devised an intelligent plan<br />
of converting some of the existing roads into tunnels, so that people can walk freely inside them and move from any place to another place i.e. for each house there is a path to every other house through the tunnels. For this he hires some builders to complete this task. All of them submit a plan. The king has to decide which builder to give the contract to.The King will choose the contractor which submits a plan with the minimum cost. Now you need to tell whether the King can decide and choose one of the contractors deterministically or not.</p>
<h3>Input</h3>
<p>The first line contains two space separated integers <b>N M</b> where</p>
<ul>
<li><b>N</b>: The number of houses</li>
<li><b>M</b>: The number of roads</li>
</ul>
<p>The next <b>M</b> lines contain three space separated integers <b>A B R</b> each, which denotes that cost of constructing a tunnel between houses <b>A</b> and <b>B</b> is <b>R</b>.<br/><br />
Assume that the tunnels are bidirectional.</br/></p>
<h3>Output</h3>
<p> One line containing “YES” (without quotes) if the King can choose deterministically otherwise "NO" (without quotes).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>min(2*10<sup>5</sup>, N*(N-1)/2)</b></li>
<li><b>0</b> ≤ <b>A,B</b> ≤ <b>N-1</b></li>
<li><b>1</b> ≤ <b>R</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 4
0 1 100
1 2 5
1 3 70
2 3 1000

<b>Output:</b>
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>