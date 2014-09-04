<?php require("../../includes/header.php"); ?><h1>Saying Hello</h1><div class="content">
<p>Once upon a time, Bob  decided to say ‘Hello’ to Alice. Knowing that Alice had a soft corner for bicyclists, he took out his bike and decided to cycle to Alice’s home. <br /><br /></p>
<p>Now, the hometown of Alice and Bob - the MathLand, is a very scenic location, hidden somewhere in the Himalayas.  Bob being a lover of scenic sights and integer sequences, rated scenery of roads on a weird scale of first 6 Super Awesome Numbers, viz. 3,4,6,12,16,18. Whenever at any crossroad C, Bob selects a road i having rating R(i) with probability P(i/C) = R(i) / (∑(R(j)) where summation is over all j roads from C (including the road from which he reached crossroads, irrespective of the location of Alice’s home). Bob proceeds thus, till he reaches Alice’s home. After meeting Alice and saying ‘Hello’ (and having a delicious pudding made by Alice, but miraculously all of these taking 0 time!), Bob heads back home in similar fashion.<br />
<br /><br /></p>
<p>There are N crossroads in MathLand. Alice’s and Bob’s home are near(at) 1st and Kth crossroads respectively. All roads in MathLand are bidirectional. Between any two given (distinct) crossroads, there is atmost 1 (direct) road. The time taken to travel from crossroad i to crossroad j is given by Tij. Now MathLand is situated over mountains of Himalayas and Bob is driving a bicycle, so because of slopes, the time taken to reach crossroad i from j on the road connecting them need not be same as that of j to i (though the rating of roads is same for both directions).<br /><br /></p>
<p>Your task is very simple. You have to find the expected time of this ‘outing’ of Bob. <br /><br /></p>
<h3>Input Format</h3>
<ul>
<li>There are several test cases.</li>
<li>Each test case beginning with a single line containing 3 space separated integers - N,M,Q denoting number of crossroads, number of roads in MathLand and Q possible locations of Alice’s home.</li>
<li>M lines follow, each containing 5 space separated integers U,V,R,Tuv,Tvu, denoting a road, its rating and ‘to-and-fro’ timings.</li>
<li>Q lines follow, each containing a single integer K, denoting the location of Alice’s home.</li>
<li>File ends with a single line containing N=M=Q=0 which should not be processed.</li>
</ul>
<h3>Output Format</h3>
<ul>
<li>For every test case output a single line denoting case number. </li>
<li>Then Q lines, each denoting the time for each K of that case.</li>
<li>Print this expected time, rounded to exactly four places after decimal point. Note that, atmost an error of 1e-3 is tolerated by the judge.
</li>
<li>Print INFINITE if this expected time of reaching Alice’s home or coming back (or both) is infinite.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li> N &gt;=2 </li>
<li> Sum(N) over all test cases &lt;= 50 </li>
<li> 0&lt;= M &lt;= MIN(100,(N*(N-1))/2)</li>
<li> 0&lt;= Q &lt;=N</li>
<li> R ∈ {3,4,6,12,16,18}</li>
<li> 1&lt;= U,V &lt;=N</li>
<li> 1&lt;= Tij &lt;=1000</li>
<li> 1&lt;=K &lt;=N</li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>4 2 3<br /><br />
1 2 3 2 1<br /><br />
1 3 3 3 1<br /><br />
1<br /><br />
2<br /><br />
4<br /><br />
0 0 0<br /></p>
<h3>Sample Output</h3>
<p>Case #1:<br /><br />
0.0000<br /><br />
7.0000<br /><br />
INFINITE<br /></p>
<h3>Explanation</h3>
<p>Explanation of Test Case#1:<br /><br />
When K=2, <br /><br />
Expected time of 1 -&gt; 2 travel: <br /><br />
S_12 = ½(2) + ¼(6) + ⅛(10) + 1/16(14) + 1/32(18) + … <br /><br />
Solving this AGP, S_12 = 6<br /><br />
Expected time of 2-&gt;1 travel:<br /><br />
S_21 = 1(1) = 1<br /><br />
So, expected time of the complete outing = S_12 + S_21 = 7<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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