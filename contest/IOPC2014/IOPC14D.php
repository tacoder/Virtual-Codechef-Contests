<?php require("../../includes/header.php"); ?><h1>The Incredible Machine</h1><div class="content">

<p>With the advancement of technology, humans have designed and developed a large variety of machines to do their work. The machines can not only do the work much faster than any human but with supreme accuracy. The defence systems of a country have also moved on to using some machines or computer programs to predict and prevent any attacks to the nation. This time, one of the final year students at IIT Kanpur this year has been asked by the President during his last visit to program an intelligent machine, to help the defence forces of India against a terrorist attack.</p>
<p>The defense forces of India have gathered top secret intel that the terrorists may try to attack some of these particular cities to affect the flow of water streams from those cities to other cities inside the country to create havoc in the normal day to day life of the citizens. Some of our soldiers by risking their life have gathered the information that the terrorists have been using to plot such an attack. They have recovered a file which contains the map of cities that the terrorists have, the water streams following between them and possible target locations and their corresponding cities that they want to affect. The defence forces are interested to know if the terrorists will in real be able to disturb the water flow at some city that they want to affect by attacking its corresponding target city.</p>
<p>The defence forces also know a encoding strategy of the terrorists. They know that if some attack planned by the terrorist to disrupt flow from city A to city B is not possible than reverse disruption, i.e., from city B to city A is possible.</p>
<p> The student is asked to program a machine which will take this file recovered from the terrorists and output for each of the terrorist plan, whether it is possible or not. The file consists of entries of two kinds, and is a model with a total of <b>N</b> cities. Each city is provided with a unique number from 1 to N. The water streams can originate at some city and can end at some city. Also, all the water streams entering at a particular city combines at that city and may flow out to multiple other cities. Note that the nature assures that no water stream can move in any circular fashion.<br /><br />
Any city is affected by an attack on a city if:</p>
<ul>
<li>It is the attacked city itself.</li>
<li>It is receiving water directly from the targeted city</li>
<li>It is receiving water from any other affected city</li>
</ul>

<p>The two kinds of entries in the file are as follows:</p>
<ol>
<li> The first kind of entries are denoted by <b>U</b> and are followed by two integers (<b>x</b> <b>y</b>, the unique identifiers of 2 cities) which means that water directly flows from the city x to city y. </li>
<li>The second kind of entries are denoted by <b>Q</b> followed by two integers <b>x</b> and <b>y</b>, meaning that the terrorists are planning to attack city x in hope to disturb water supply at city y</li>
</ol>

<p>The file provided to the student, the same one the defence forces acquired from the terrorists is a mix of these two types of entries. The terrorists, trying to be smart, have mixed up these entries i.e. they can have entries of type U and then Q and then U again and so on.</p>
<p>The defence forces know that this file is authentic. They want to know for each entry of type Q for cities a and b (i.e. the terrorists aim to attack city a to disturb water at city b) whether the terrorists can do so, or not. The defence forces have also identified a trick in these entries which is if it is not possible to disturb b by attacking a, it is possible to disturb a by attacking b. And if this is the case, the terrorists have inverted the order of cities in the subsequent entries of kind U. That is, if the entry Q A<sub>1</sub> B<sub>1</sub> results in Not possible, than the following entries U A<sub>2</sub> B<sub>2</sub> denotes a direct flow from B<sub>2</sub> to A<sub>2</sub>. Note that if another following entry Q results in not possible, then the order in the following U entries is reversed again, i.e., it returns to the original order.
</p>
<p>Help the student to program such a machine to figure out the terrorists plan.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases is given below</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of cities in the file. </li>
<li>Then follows the file acquired by the defence system. Each line is one of the following:
<ol>
<li>U a b <br /><br />
U followed by two space separated integers a and b, meaning the file mentions that there is a direct water stream from city a to city b.
</li>
<li> Q a b <br /><br />
Q followed by two space separated integers a and b, meaning that the file mentions that the terrorists are interested in attacking city a to disturb water stream at city b.
</li>
<li>END<br /><br />
A string "END" (without quotes), denoting the end of this test case.
 </li>
</ol>
</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each entry of the form "Q a b", print "YES" (without quotes) if it is possible to disturb water stream at city b by attacking city a, otherwise print "NO"(without quotes) in a separate line.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>4000</b></li>
<li><b>1</b> ≤ <b>a, b</b> ≤ <b>N</b></li>
<li>The total number of lines in any test file will be bounded atmost 500000 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
5
U 1 2
U 2 5
Q 5 1
U 4 3
U 3 2
Q 1 4
Q 5 2
U 1 4
Q 1 5
END
3
U 1 2
Q 1 2
Q 2 1
U 2 3
Q 2 3
END<br />

<b>Output:</b>
NO
YES
NO
YES
YES
NO
NO<br />


</pre>
<h3>Explanation</h3>
<p>First a flow is established from city 1 to city 2 and from city 2 city 5.<br /><br />
After that, for Q 5 1, since there is no flow from city 5 to city 1, answer is "NO", and following U entries are reversed.<br /><br />
Then, flow is established from city 3 to city 4 and from city 2 city 3.<br /><br />
For Q 1 4, since there is a flow from 1 -&gt; 2 -&gt; 3 -&gt; 4, the answer is "YES".<br /><br />
Similarly the rest of the queries and updates are handled.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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