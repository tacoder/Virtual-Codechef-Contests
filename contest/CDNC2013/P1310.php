<?php require("../../includes/header.php"); ?><h1>Chemical Plant</h1><div class="content">

<p>Gas leakages at chemical plants might prove to be fatal and put the lives of the workers at risk. </p>
<p>The aim is to detect the leakage of a gas and prevent its explosion. Our friend Ramesh has successfully obtained the tender to set up a chemical plant to supply fertilizers to the nearby villages. A magnanimous person by heart, he has always put the welfare of the workers above all. So, safety measures have to be taken.</p>
<p>For that worst case possibility is considered here.</p>
<p>The rooms of the plant can be modelled as axb matrix. The gas used in his plant has a queer property. </p>
<p>In times of its leakage, it expands according to the following rules:</p>
<p>If at time t, gas leaks from room (x ,y), then at time t+1 it can breaks the doors of atmost two more rooms out of (x+1,y), (x-1,y), (x,y+1), (x,y-1) and expands.</p>
<p>For example if at t = 0 sec if the gas occupies (2, 3), then at time t = 1 sec, the rooms filled with gas can be any of the given 6 possibilities:</p>
<pre>
1. Rooms at (2,3), (3,3) and (2,4).

2. Rooms at (2,3), (3,3) and (1,3).

3. Rooms at (2,3), (3,3) and (2,2).

4. Rooms at (2,3), (2,4) and (1,3).

5. Rooms at (2,3), (2,4) and (2,2).

6. Rooms at (2,3), (2,2) and (1,3).

Note: At t= 2 sec, it can expand from all the rooms that are full of gas t= 1.
</pre><p>The gas explodes after gas fills all the rooms and there is no room for it to expand.<br />
Find the minimum time gas takes for the whole plant to explode and help Ramesh ensure the safety of his workers.</p>
<h3>Input</h3>
<p>T - The number of test cases.</p>
<p>a b - number of row and columns in the room matrix.</p>
<p>x y- coordinate of the room where the gas leaked  first.</p>
<h3>Output</h3>
<p>The minimum time in seconds the plant take to explode.</p>
<h3>Constraints</h3>
<pre>1 &lt;= T &lt;= 50

1 &lt;= a, b &lt;= 10000

1 &lt;= x &lt;= n

1 &lt;= y &lt;= m

</pre><h3>Example</h3>
<pre><b>Input:</b>
2
9 9
2 6
1 1
1 1


<b>Output:</b>
12
0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, SCM qobi, TCL, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>