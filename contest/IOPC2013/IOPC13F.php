<?php require("../../includes/header.php"); ?><h1>The Jedi Battalion</h1><div class="content">

<p> The war between the Jedi’s and the Empire Battle Droids is at its height. Master Yoda, bored from this war, wants to end this as soon as possible, while using minimum Jedi powers. To discuss the battle plans, he calls a meeting of all the Jedi Masters at the Jedi Temple. There, the Jedis start meditating and get connected to each other using telepathy. To maximise their power, they enclose a closed region using these telepathic connections. Telepathy is a tricky business, the Jedi’s can somehow connect to each other with the shortest distance possible in real world.</p>
<p> The droids somehow come to know of this meeting and plan to kill the Jedis in the Temple. But as they approach the Temple, the Jedis become aware of their presence. Master Yoda doesn’t want to waste precious Jedi powers on these droids. He asks each Jedi warrior how much power would he need to use in order to kill each droid.</p>
<p> To calculate the power needed to kill a droid, a Jedi cuts himself from the other Jedis and observes if a droid is inside the telepathic region, so formed. If the droid falls inside it, the power required to kill him is equal to the manhattan distance between the Jedi and that droid. If not, the power required is equal to the square of Euclidean distance between them.</p>
<p>Master Yoda decides to launch an attack before its too late, so he assigns each Jedi a particular drone to kill such that the total Jedi power required by them is <b>maximised</b>.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b>, which denotes the number of Jedi Masters (=Number of Empire Battle Droids)<br />
The next <b>N</b> lines contain two space separated integers <b>X Y</b>, the location of the Jedi Masters.<br />
The next <b>N</b> lines contain the two space separated integers <b>X Y</b>, the location of the battle droids.</p>
<h3>Output</h3>
<p>A single integer <b>K</b> denoting the <b>maximum</b> total Jedi power that is required.</p>
<h3>Constraints</h3>
<ul>
<li><b>5</b> ≤ <b>N</b> ≤ <b>350</b></li>
<li><b>1</b> ≤ <b>X,Y</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
2 1
3 2
3 4
1 4
1 2
2 2
3 3
3 1
4 3
4 1

<b>Output:</b>
41
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
            <td>4 sec</td>
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