<?php require("../../includes/header.php"); ?><h1>GAME AND CHEATS</h1><div class="content">
<p> </p>
<p>
<h3>Problem description.</h3>
</p>
<p>There are N friends who are playing a computer game with each other . The N friends are sitting in one row of size N .<br />
The person sitting on first bench  has gameid 0, person sitting on second bench has gameid 1, third has gameid 2 and so on ...<br />
But they are not able to complete the game.<br />
So in order to complete the game they started using unfair means like using cheats.<br />
A lot of cheats are available to them. All the cheats are distributed into 3 folders named 1 , 2 , 3.</p>
<p>It is found that when one cheat is being used then it is used by all people who have gameid between i to j  ( both i and j are included ).<br />
When the cheats are used then either the gamepoints of a person increases or decreases.<br />
<br />
When the cheats of folder 1 are used by people having gameid between i to j then the gamepoints of person having gameid i increases by one,<br />
gamepoints of person having gameid i + 1 increases by two and gamepoints of person having gameid i + 2 increases by three and so on till j</p>
<p>When the cheats of folder 2 are used by people having gameid between i to j then the gamepoints of all people in the  given range by certain value v.</p>
<p>When the cheats of folder 3 are used by people having gameid between i to j then the gamepoints of all people in the  given range becomes v.</p>
<p>A person comes  and starts to sum the gamepoints . But he was having great difficulty in calculating the sum  as N is very large<br />
so he decided to write a program which could help him but he was not able to write it. </p>
<p>So you have to help that person by writing a code for him which would help  him .</p>
<pre>
THE INPUT WILL CONTAIN MANY OPERATIONS . BUT THE OPERATION WILL BE OF 4 TYPE ONLY 
OPERATION 1
1 i j    
(this operation corresponds to cheats of folder 1)

OPERATION 2 
2 i j v  
(this operation corresponds to cheats of folder 2)
  
OPERATION 3
3 i j v 
(this operation corresponds to cheats of folder 3)

OPERATION 4
4 i j 
(this operation corresponds to finding sum of gamepoints from i to j)

INTIALLY  GAMEPOINT OF EVERY PLAYER IS ZERO.</pre>
<h3>Input</h3>
<p>First line contains T( no. of test cases ).<br />
For each test case the first line contains two integer N ( no. of friends ) , Q( no. of operations).<br />
Next Q lines contains operations.
</p>
<h3>Output</h3>
<p>Output the sum of gamepoints of people from id i to j as given in the operation 4. You have to output the sum everytime operation 4 is encountered in a test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10^6 </b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b> 10^5 </b></li>
<li><b>0</b> ≤ <b>i</b> ≤ <b> j </b><b> &lt; </b><b> N</b></li>
<li><b>-100</b> ≤ <b>v</b> ≤ <b> 100 </b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<p>
2
5 4
1 0 4
2 0 4 1
3 3 3 0
4 0 4
7 9
1 0 6
2 3 5 2
3 1 2 5
4 0 3
2 1 5 3
4 0 6
3 0 6 0
1 0 6
4 0 6
</p>
<b>Output:</b>
<p>
15
17
54
28
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ninja13">ninja13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2014</td>
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