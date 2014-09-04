<?php require("../../includes/header.php"); ?><h1>The Election Day</h1><div class="content">
<p><b>Problem Description</b></p>
<p>And it is the day of the election. The Election Commission has set up a unique voting system this time to enhance security and complete the proceedings in a timely manner. There are <i>N</i> voters in the country and all of them assemble in a large queue. The queue has polling booths at each of its end. Now each voter needs some time to think about his precious vote. The <i>ith</i> voter takes exactly <i>think[i]</i> seconds inside the polling booth to cast his vote. Obviously he cannot think while he is in queue because the people have grown very smart and can figure out what is going in each others mind by just looking at the faces.</p>
<p>At any given second, a person can do the following activities :</p>
<ul>
<li>He may move to one of the adjacent cells in the queue(left or right) provided the cell exist and it is unoccupied then. No two people can stand on the same cell of the queue at the same time.</li>
<li>He may enter the polling booth and start to think.</li>
<li>He may leave the polling booth and go to his home.</li>
</ul>
<p>Note that people walk simultaneously, so a person can enter any cell or the booth at the same time another person leaves it.
</p>
<p>Given the array <i>think[ ]</i>, you need to determine the shortest possible time in which all people have cast their votes.</p>
<p><b>Input</b></p>
<p>The first line of the input consists of the number of cases (T). T test cases follows. Each test case begins with line with the number of people (N). Next line contains N numbers which constitute the array think. 0th index is the leftmost person and (N - 1)th index is the rightmost.</p>
<p><b>Output</b></p>
<p>For each test case, output one number which is the shortest time in which election is completed and all people go back to their homes.</p>
<p><b>Constraints</b></p>
<pre>
T ≤ 50<br />
1 ≤ N ≤ 10<sup>5</sup><br />
0 ≤ think[i] ≤ 10<sup>3</sup><br />
</pre><p><b>Sample Cases</b></p>
<pre>
2
3
3 4 2
2
4 0
</pre><p><b>Output</b></p>
<pre>
9
6
</pre><p><b>Explanations</b></p>
<p>In the first test case, things happen in the following manner: Let person A be on cell 0, B be on cell 1 and C be on cell 2 initially. Also lets denote left polling booth as L and right polling booth as R.</p>
<ul>
<li>Time 0 : A on 0, B on 1, C on 2. L and R empty</li>
<li>Time 1 : A in L, C in R, B on 2.</li>
<li>Time 3 : C casts its vote</li>
<li>Time 4 : C leaves R, B enters R.</li>
<li>Time 5 : A leaves L and goes home.</li>
<li>Time 8 : B gives vote</li>
<li>Time 9 : B leaves for home</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/phantom11">phantom11</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-02-2014</td>
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
            <td>C, CPP 4.3.2, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>